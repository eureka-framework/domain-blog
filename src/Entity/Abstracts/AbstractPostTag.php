<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Entity\Abstracts;

use Eureka\Component\Orm\AbstractEntity;
use Eureka\Component\Orm\RepositoryInterface;
use Eureka\Component\Validation\Exception\ValidationException;
use Eureka\Component\Validation\ValidatorFactoryInterface;
use Eureka\Component\Validation\ValidatorEntityFactoryInterface;
use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Domain\Blog\Entity\Post;
use Eureka\Domain\Blog\Infrastructure\Mapper\PostMapper;
use Eureka\Component\Orm\EntityInterface;
use Eureka\Domain\Blog\Entity\Tag;
use Eureka\Domain\Blog\Infrastructure\Mapper\TagMapper;

/**
 * Abstract PostTag data class.
 *
 * /!\ AUTO GENERATED FILE. DO NOT EDIT THIS FILE.
 * You can add your specific code in child class: PostTag
 *
 * @author Eureka Orm Generator
 */
abstract class AbstractPostTag extends AbstractEntity
{
    /** @var int $blogPostId Property blogPostId */
    protected int $blogPostId = 0;

    /** @var int $blogTagId Property blogTagId */
    protected int $blogTagId = 0;

    /** @var Post|EntityInterface|null $joinOneCachePost Property joinOneCachePost */
    protected ?Post $joinOneCachePost = null;

    /** @var Tag|EntityInterface|null $joinOneCacheTag Property joinOneCacheTag */
    protected ?Tag $joinOneCacheTag = null;

    /**
     * AbstractEntity constructor.
     *
     * @param RepositoryInterface $repository
     * @param ValidatorFactoryInterface|null $validatorFactory
     * @param ValidatorEntityFactoryInterface|null $validatorEntityFactory
     */
    public function __construct(
        RepositoryInterface $repository,
        ?ValidatorFactoryInterface $validatorFactory = null,
        ?ValidatorEntityFactoryInterface $validatorEntityFactory = null
    ) {
        $this->setRepository($repository);
        $this->setValidatorFactories($validatorFactory, $validatorEntityFactory);

        $this->setValidatorConfig([
            'blog_post_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'blog_tag_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
        ]);
    }

    /**
     * Get cache key
     *
     * @return string
     */
    public function getCacheKey(): string
    {
        return 'eka.dm.blog.blog.post.tag.' . $this->getBlogPostId() . $this->getBlogTagId();
    }

    /**
     * Get value for property "blog_post_id"
     *
     * @return int
     */
    public function getBlogPostId(): int
    {
        return $this->blogPostId;
    }

    /**
     * Get value for property "blog_tag_id"
     *
     * @return int
     */
    public function getBlogTagId(): int
    {
        return $this->blogTagId;
    }

    /**
     * Set value for property "blog_post_id"
     *
     * @param  int $blogPostId
     * @return $this
     * @throws ValidationException
     */
    public function setBlogPostId(int $blogPostId): self
    {
        $this->validateInput('blog_post_id', $blogPostId);

        if ($this->exists() && $this->blogPostId !== $blogPostId) {
            $this->markFieldAsUpdated('blogPostId');
        }

        $this->blogPostId = $blogPostId;

        return $this;
    }

    /**
     * Set value for property "blog_tag_id"
     *
     * @param  int $blogTagId
     * @return $this
     * @throws ValidationException
     */
    public function setBlogTagId(int $blogTagId): self
    {
        $this->validateInput('blog_tag_id', $blogTagId);

        if ($this->exists() && $this->blogTagId !== $blogTagId) {
            $this->markFieldAsUpdated('blogTagId');
        }

        $this->blogTagId = $blogTagId;

        return $this;
    }

    /**
     * Get Post entity instance.
     *
     * @param  bool $isForceReload
     * @return Post
     * @throws OrmException
     */
    public function getPost(bool $isForceReload = false): Post
    {
        if ($isForceReload || $this->joinOneCachePost === null) {
            $mapper = $this->getRepository()->getMapper(PostMapper::class);
            $this->joinOneCachePost = $mapper->findByKeys([
                'blog_post_id' => $this->getBlogPostId(),
            ]);
        }

        return $this->joinOneCachePost;
    }

    /**
     * Set Post entity instance.
     *
     * @param Post $entity
     * @return $this
     */
    public function setPost(Post $entity): self
    {
        $this->joinOneCachePost = $entity;

        return $this;
    }

    /**
     * Get Tag entity instance.
     *
     * @param  bool $isForceReload
     * @return Tag
     * @throws OrmException
     */
    public function getTag(bool $isForceReload = false): Tag
    {
        if ($isForceReload || $this->joinOneCacheTag === null) {
            $mapper = $this->getRepository()->getMapper(TagMapper::class);
            $this->joinOneCacheTag = $mapper->findByKeys([
                'blog_tag_id' => $this->getBlogTagId(),
            ]);
        }

        return $this->joinOneCacheTag;
    }

    /**
     * Set Tag entity instance.
     *
     * @param Tag $entity
     * @return $this
     */
    public function setTag(Tag $entity): self
    {
        $this->joinOneCacheTag = $entity;

        return $this;
    }
}
