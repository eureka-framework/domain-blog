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

/**
 * Abstract Author data class.
 *
 * /!\ AUTO GENERATED FILE. DO NOT EDIT THIS FILE.
 * You can add your specific code in child class: Author
 *
 * @author Eureka Orm Generator
 */
abstract class AbstractAuthor extends AbstractEntity
{
    /** @var int $id Property id */
    protected int $id = 0;

    /** @var bool $isEnabled Property isEnabled */
    protected bool $isEnabled = true;

    /** @var string $firstName Property firstName */
    protected string $firstName = '';

    /** @var string $lastName Property lastName */
    protected string $lastName = '';

    /** @var string $pseudo Property pseudo */
    protected string $pseudo = '';

    /** @var string $dateCreate Property dateCreate */
    protected string $dateCreate = '0000-00-00 00:00:00';

    /** @var string|null $dateUpdate Property dateUpdate */
    protected ?string $dateUpdate = null;

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
            'blog_author_id' => [
                'type'      => 'integer',
                'options'   => ['min_range' => 0, 'max_range' => 4294967295],
            ],
            'blog_author_is_enabled' => [
                'type'      => 'boolean',
                'options'   => [],
            ],
            'blog_author_first_name' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 50],
            ],
            'blog_author_last_name' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 100],
            ],
            'blog_author_pseudo' => [
                'type'      => 'string',
                'options'   => ['min_length' => 0, 'max_length' => 100],
            ],
            'blog_author_date_create' => [
                'type'      => 'datetime',
                'options'   => [],
            ],
            'blog_author_date_update' => [
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
        return 'eka.dm.blog.blog.author.' . $this->getId();
    }

    /**
     * Get value for property "blog_author_id"
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get value for property "blog_author_is_enabled"
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * Get value for property "blog_author_first_name"
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Get value for property "blog_author_last_name"
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Get value for property "blog_author_pseudo"
     *
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * Get value for property "blog_author_date_create"
     *
     * @return string
     */
    public function getDateCreate(): string
    {
        return $this->dateCreate;
    }

    /**
     * Get value for property "blog_author_date_update"
     *
     * @return string|null
     */
    public function getDateUpdate(): ?string
    {
        return $this->dateUpdate;
    }

    /**
     * Set value for property "blog_author_id"
     *
     * @param  int $id
     * @return $this
     * @throws ValidationException
     */
    public function setId(int $id): self
    {
        $this->validateInput('blog_author_id', $id);

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
     * Set value for property "blog_author_is_enabled"
     *
     * @param  bool $isEnabled
     * @return $this
     * @throws ValidationException
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->validateInput('blog_author_is_enabled', $isEnabled);

        if ($this->exists() && $this->isEnabled !== $isEnabled) {
            $this->markFieldAsUpdated('isEnabled');
        }

        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Set value for property "blog_author_first_name"
     *
     * @param  string $firstName
     * @return $this
     * @throws ValidationException
     */
    public function setFirstName(string $firstName): self
    {
        $this->validateInput('blog_author_first_name', $firstName);

        if ($this->exists() && $this->firstName !== $firstName) {
            $this->markFieldAsUpdated('firstName');
        }

        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Set value for property "blog_author_last_name"
     *
     * @param  string $lastName
     * @return $this
     * @throws ValidationException
     */
    public function setLastName(string $lastName): self
    {
        $this->validateInput('blog_author_last_name', $lastName);

        if ($this->exists() && $this->lastName !== $lastName) {
            $this->markFieldAsUpdated('lastName');
        }

        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Set value for property "blog_author_pseudo"
     *
     * @param  string $pseudo
     * @return $this
     * @throws ValidationException
     */
    public function setPseudo(string $pseudo): self
    {
        $this->validateInput('blog_author_pseudo', $pseudo);

        if ($this->exists() && $this->pseudo !== $pseudo) {
            $this->markFieldAsUpdated('pseudo');
        }

        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Set value for property "blog_author_date_create"
     *
     * @param  string $dateCreate
     * @return $this
     * @throws ValidationException
     */
    public function setDateCreate(string $dateCreate): self
    {
        $this->validateInput('blog_author_date_create', $dateCreate);

        if ($this->exists() && $this->dateCreate !== $dateCreate) {
            $this->markFieldAsUpdated('dateCreate');
        }

        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Set value for property "blog_author_date_update"
     *
     * @param  string|null $dateUpdate
     * @return $this
     * @throws ValidationException
     */
    public function setDateUpdate(?string $dateUpdate): self
    {
        if ($dateUpdate !== null) {
            $this->validateInput('blog_author_date_update', $dateUpdate);
        }

        if ($this->exists() && $this->dateUpdate !== $dateUpdate) {
            $this->markFieldAsUpdated('dateUpdate');
        }

        $this->dateUpdate = $dateUpdate;

        return $this;
    }
}