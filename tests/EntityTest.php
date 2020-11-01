<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Tests;

use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Component\Orm\RepositoryInterface;
use Eureka\Domain\Blog\Entity\Author;
use Eureka\Domain\Blog\Entity\Category;
use Eureka\Domain\Blog\Entity\Post;
use Eureka\Domain\Blog\Entity\PostTag;
use Eureka\Domain\Blog\Entity\Tag;
use Eureka\Domain\Blog\Infrastructure\Mapper\PostMapper;
use Eureka\Domain\Blog\Infrastructure\Mapper\PostTagMapper;
use Eureka\Domain\Blog\Repository\AuthorRepositoryInterface;
use Eureka\Domain\Blog\Repository\CategoryRepositoryInterface;
use Eureka\Domain\Blog\Repository\PostRepositoryInterface;
use Eureka\Domain\Blog\Repository\PostTagRepositoryInterface;
use Eureka\Domain\Blog\Repository\TagRepositoryInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class EntityTest
 *
 * @author Romain Cottard
 */
class EntityTest extends TestCase
{
    /**
     * @return void
     */
    public function testICanInstantiateEntityAuthor(): void
    {
        $entity = new Author($this->getMapperMock(AuthorRepositoryInterface::class));

        $this->assertInstanceOf(Author::class, $entity);
    }

    /**
     * @return void
     */
    public function testICanInstantiateEntityCategory(): void
    {
        $entity = new Category($this->getMapperMock(CategoryRepositoryInterface::class));

        $this->assertInstanceOf(Category::class, $entity);
    }

    /**
     * @return void
     */
    public function testICanInstantiateEntityPost(): void
    {
        $entity = new Post($this->getMapperMock(PostRepositoryInterface::class));

        $this->assertInstanceOf(Post::class, $entity);
    }

    /**
     * @return void
     */
    public function testICanInstantiateEntityPostTag(): void
    {
        $entity = new PostTag($this->getMapperMock(PostTagRepositoryInterface::class));

        $this->assertInstanceOf(PostTag::class, $entity);
    }

    /**
     * @return void
     */
    public function testICanInstantiateEntityTag(): void
    {
        $entity = new Tag($this->getMapperMock(TagRepositoryInterface::class));

        $this->assertInstanceOf(Tag::class, $entity);
    }

    /**
     * @return void
     */
    public function testICanCountArticlesWithCurrentCategory(): void
    {
        $postRepository = $this->getMapperMock(PostRepositoryInterface::class);
        $postRepository
            ->method('findAllByKeys')
            ->willReturn([new Post($postRepository), new Post($postRepository), new Post($postRepository)])
        ;

        $mockRepository = $this->getMapperMock(CategoryRepositoryInterface::class);
        $mockRepository->method('getMapper')->willReturn($postRepository);

        $entity = new Category($mockRepository);

        $this->assertSame(3, $entity->countArticles());
    }

    /**
     * @return void
     */
    public function testICanCountArticlesWithCurrentTag(): void
    {
        $postTagRepository = $this->getMapperMock(PostTagRepositoryInterface::class);
        $postTagRepository
            ->method('findAllByKeys')
            ->willReturn([new PostTag($postTagRepository), new PostTag($postTagRepository)])
        ;

        $mockRepository = $this->getMapperMock(TagRepositoryInterface::class);
        $mockRepository->method('getMapper')->willReturn($postTagRepository);

        $entity = new Tag($mockRepository);

        $this->assertSame(2, $entity->countArticles());
    }

    /**
     * @param string $className
     * @param array $mappers
     * @return MockObject|RepositoryInterface
     */
    public function getMapperMock(string $className, array $mappers = []): RepositoryInterface
    {
        /** @var RepositoryInterface $mock */
        return $this->getMockBuilder($className)->getMock();
    }
}
