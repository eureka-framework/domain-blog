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
use Eureka\Domain\Blog\Entity\Author;
use Eureka\Domain\Blog\Infrastructure\Mapper\AuthorMapper;
use Eureka\Component\Orm\EntityInterface;
use Eureka\Domain\Blog\Entity\Category;
use Eureka\Domain\Blog\Infrastructure\Mapper\CategoryMapper;
use Eureka\Domain\Blog\Entity\PostTag;
use Eureka\Domain\Blog\Infrastructure\Mapper\PostTagMapper;

/**
 * Abstract Post data class.
 *
 * /!\ AUTO GENERATED FILE. DO NOT EDIT THIS FILE.
 * You can add your specific code in child class: Post
 *
 * @author Eureka Orm Generator
 */
abstract class AbstractPost extends AbstractEntity
{
    /** @var int $id Property id */
    protected int $id = 0;

    /** @var int $blogAuthorId Property blogAuthorId */
    protected int $blogAuthorId = 0;

    /** @var int $blogCategoryId Property blogCategoryId */
    protected int $blogCategoryId = 1;

    /** @var int $status Property status */
    protected int $status = 1;

    /** @var string $title Property title */
    protected string $title = '';

    /** @var string|null $image Property image */
    protected ?string $image = null;

    /** @var string|null $thumbnail Property thumbnail */
    protected ?string $thumbnail = null;

    /** @var string $summary Property summary */
    protected string $summary = '';

    /** @var string $article Property article */
    protected string $article = '';

    /** @var string $dateCreate Property dateCreate */
    protected string $dateCreate = '0000-00-00 00:00:00';

    /** @var string|null $dateUpdate Property dateUpdate */
    protected ?string $dateUpdate = null;

    /** @var string|null $datePublication Property datePublication */
    protected ?string $datePublication = null;

    /** @var Author|EntityInterface|null $joinOneCacheAuthor Property joinOneCacheAuthor */
    protected ?Author $joinOneCacheAuthor = null;

    /** @var Category|EntityInterface|null $joinOneCacheCategory Property joinOneCacheCategory */
    protected ?Category $joinOneCacheCategory = null;

    /** @var PostTag[]|EntityInterface[]|null $joinManyCachePostTags Property joinManyCachePostTags */
    protected ?array $joinManyCachePostTags = null;

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
            'blog_author_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'blog_category_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 65535],
            ],
            'blog_post_status' => [
                'type'      => 'integer',
                'options'   => ['min_range' => -128, 'max_range' => 127],
            ],
            'blog_post_title' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 100],
            ],
            'blog_post_image' => [
                'type'      => 'string',
                'options'   => ['max_length' => 200],
            ],
            'blog_post_thumbnail' => [
                'type'      => 'string',
                'options'   => ['max_length' => 200],
            ],
            'blog_post_summary' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 65535],
            ],
            'blog_post_article' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 16777215],
            ],
            'blog_post_date_create' => [
                'type'      => 'datetime',
                'options'   => [],
            ],
            'blog_post_date_update' => [
                'type'      => 'datetime',
                'options'   => [],
            ],
            'blog_post_date_publication' => [
                'type'      => 'datetime',
                'options'   => [],
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
        return 'eka.dm.blog.blog.post.tag.' . $this->getId();
    }

    /**
     * Get value for property "blog_post_id"
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get value for property "blog_author_id"
     *
     * @return int
     */
    public function getBlogAuthorId(): int
    {
        return $this->blogAuthorId;
    }

    /**
     * Get value for property "blog_category_id"
     *
     * @return int
     */
    public function getBlogCategoryId(): int
    {
        return $this->blogCategoryId;
    }

    /**
     * Get value for property "blog_post_status"
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * Get value for property "blog_post_title"
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get value for property "blog_post_image"
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Get value for property "blog_post_thumbnail"
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * Get value for property "blog_post_summary"
     *
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * Get value for property "blog_post_article"
     *
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * Get value for property "blog_post_date_create"
     *
     * @return string
     */
    public function getDateCreate(): string
    {
        return $this->dateCreate;
    }

    /**
     * Get value for property "blog_post_date_update"
     *
     * @return string|null
     */
    public function getDateUpdate(): ?string
    {
        return $this->dateUpdate;
    }

    /**
     * Get value for property "blog_post_date_publication"
     *
     * @return string|null
     */
    public function getDatePublication(): ?string
    {
        return $this->datePublication;
    }

    /**
     * Set value for property "blog_post_id"
     *
     * @param  int $id
     * @return $this
     * @throws ValidationException
     */
    public function setId(int $id): self
    {
        $this->validateInput('blog_post_id', $id);

        if ($this->exists() && $this->id !== $id) {
            $this->markFieldAsUpdated('id');
        }

        $this->id = $id;

        return $this;
    }

    /**
     * Set auto increment value.
     *
     * @param  integer $id
     * @return $this
     * @throws ValidationException
     */
    public function setAutoIncrementId(int $id): self
    {
        return $this->setId($id);
    }

    /**
     * Set value for property "blog_author_id"
     *
     * @param  int $blogAuthorId
     * @return $this
     * @throws ValidationException
     */
    public function setBlogAuthorId(int $blogAuthorId): self
    {
        $this->validateInput('blog_author_id', $blogAuthorId);

        if ($this->exists() && $this->blogAuthorId !== $blogAuthorId) {
            $this->markFieldAsUpdated('blogAuthorId');
        }

        $this->blogAuthorId = $blogAuthorId;

        return $this;
    }

    /**
     * Set value for property "blog_category_id"
     *
     * @param  int $blogCategoryId
     * @return $this
     * @throws ValidationException
     */
    public function setBlogCategoryId(int $blogCategoryId): self
    {
        $this->validateInput('blog_category_id', $blogCategoryId);

        if ($this->exists() && $this->blogCategoryId !== $blogCategoryId) {
            $this->markFieldAsUpdated('blogCategoryId');
        }

        $this->blogCategoryId = $blogCategoryId;

        return $this;
    }

    /**
     * Set value for property "blog_post_status"
     *
     * @param  int $status
     * @return $this
     * @throws ValidationException
     */
    public function setStatus(int $status): self
    {
        $this->validateInput('blog_post_status', $status);

        if ($this->exists() && $this->status !== $status) {
            $this->markFieldAsUpdated('status');
        }

        $this->status = $status;

        return $this;
    }

    /**
     * Set value for property "blog_post_title"
     *
     * @param  string $title
     * @return $this
     * @throws ValidationException
     */
    public function setTitle(string $title): self
    {
        $this->validateInput('blog_post_title', $title);

        if ($this->exists() && $this->title !== $title) {
            $this->markFieldAsUpdated('title');
        }

        $this->title = $title;

        return $this;
    }

    /**
     * Set value for property "blog_post_image"
     *
     * @param  string|null $image
     * @return $this
     * @throws ValidationException
     */
    public function setImage(?string $image): self
    {
        if ($image !== null) {
            $this->validateInput('blog_post_image', $image);
        }

        if ($this->exists() && $this->image !== $image) {
            $this->markFieldAsUpdated('image');
        }

        $this->image = $image;

        return $this;
    }

    /**
     * Set value for property "blog_post_thumbnail"
     *
     * @param  string|null $thumbnail
     * @return $this
     * @throws ValidationException
     */
    public function setThumbnail(?string $thumbnail): self
    {
        if ($thumbnail !== null) {
            $this->validateInput('blog_post_thumbnail', $thumbnail);
        }

        if ($this->exists() && $this->thumbnail !== $thumbnail) {
            $this->markFieldAsUpdated('thumbnail');
        }

        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Set value for property "blog_post_summary"
     *
     * @param  string $summary
     * @return $this
     * @throws ValidationException
     */
    public function setSummary(string $summary): self
    {
        $this->validateInput('blog_post_summary', $summary);

        if ($this->exists() && $this->summary !== $summary) {
            $this->markFieldAsUpdated('summary');
        }

        $this->summary = $summary;

        return $this;
    }

    /**
     * Set value for property "blog_post_article"
     *
     * @param  string $article
     * @return $this
     * @throws ValidationException
     */
    public function setArticle(string $article): self
    {
        $this->validateInput('blog_post_article', $article);

        if ($this->exists() && $this->article !== $article) {
            $this->markFieldAsUpdated('article');
        }

        $this->article = $article;

        return $this;
    }

    /**
     * Set value for property "blog_post_date_create"
     *
     * @param  string $dateCreate
     * @return $this
     * @throws ValidationException
     */
    public function setDateCreate(string $dateCreate): self
    {
        $this->validateInput('blog_post_date_create', $dateCreate);

        if ($this->exists() && $this->dateCreate !== $dateCreate) {
            $this->markFieldAsUpdated('dateCreate');
        }

        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Set value for property "blog_post_date_update"
     *
     * @param  string|null $dateUpdate
     * @return $this
     * @throws ValidationException
     */
    public function setDateUpdate(?string $dateUpdate): self
    {
        if ($dateUpdate !== null) {
            $this->validateInput('blog_post_date_update', $dateUpdate);
        }

        if ($this->exists() && $this->dateUpdate !== $dateUpdate) {
            $this->markFieldAsUpdated('dateUpdate');
        }

        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Set value for property "blog_post_date_publication"
     *
     * @param  string|null $datePublication
     * @return $this
     * @throws ValidationException
     */
    public function setDatePublication(?string $datePublication): self
    {
        if ($datePublication !== null) {
            $this->validateInput('blog_post_date_publication', $datePublication);
        }

        if ($this->exists() && $this->datePublication !== $datePublication) {
            $this->markFieldAsUpdated('datePublication');
        }

        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get Author entity instance.
     *
     * @param  bool $isForceReload
     * @return Author
     * @throws OrmException
     */
    public function getAuthor(bool $isForceReload = false): Author
    {
        if ($isForceReload || $this->joinOneCacheAuthor === null) {
            $mapper = $this->getRepository()->getMapper(AuthorMapper::class);
            $this->joinOneCacheAuthor = $mapper->findByKeys([
                'blog_author_id' => $this->getBlogAuthorId(),
            ]);
        }

        return $this->joinOneCacheAuthor;
    }

    /**
     * Set Author entity instance.
     *
     * @param Author $entity
     * @return $this
     */
    public function setAuthor(Author $entity): self
    {
        $this->joinOneCacheAuthor = $entity;

        return $this;
    }

    /**
     * Get Category entity instance.
     *
     * @param  bool $isForceReload
     * @return Category
     * @throws OrmException
     */
    public function getCategory(bool $isForceReload = false): Category
    {
        if ($isForceReload || $this->joinOneCacheCategory === null) {
            $mapper = $this->getRepository()->getMapper(CategoryMapper::class);
            $this->joinOneCacheCategory = $mapper->findByKeys([
                'blog_category_id' => $this->getBlogCategoryId(),
            ]);
        }

        return $this->joinOneCacheCategory;
    }

    /**
     * Set Category entity instance.
     *
     * @param Category $entity
     * @return $this
     */
    public function setCategory(Category $entity): self
    {
        $this->joinOneCacheCategory = $entity;

        return $this;
    }

    /**
     * Get list of PostTag entities instance.
     *
     * @param  bool $isForceReload
     * @return PostTag[]
     * @throws OrmException
     */
    public function getAllPostTags(bool $isForceReload = false): array
    {
        if ($isForceReload || $this->joinManyCachePostTags === null) {
            $mapper = $this->getRepository()->getMapper(PostTagMapper::class);
            $this->joinManyCachePostTags = $mapper->findAllByKeys([
                'blog_post_id' => $this->getId(),
            ]);
        }

        return $this->joinManyCachePostTags;
    }

    /**
     * Set PostTag entity instances.
     *
     * @param PostTag[] $entities
     * @return $this
     */
    public function setAllPostTags(array $entities): self
    {
        $this->joinManyCachePostTags = $entities;

        return $this;
    }
}