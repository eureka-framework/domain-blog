<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper\Abstracts;

use Eureka\Component\Orm\AbstractMapper;
use Eureka\Domain\Blog\Entity\Author;

/**
 * Abstract Author mapper class.
 *
 * /!\ AUTO GENERATED FILE. DO NOT EDIT THIS FILE.
 * You can add your specific code in child class: {{ class.child }}
 *
 * @author Eureka Orm Generator
 */
abstract class AbstractAuthorMapper extends AbstractMapper
{
    /**
     * Initialize mapper with proper values for mapped table.
     *
     * @return void
     */
    protected function initialize(): void
    {
        $this->setEntityClass(Author::class);
        $this->setTable('blog_author');

        $this->setFields([
            'blog_author_id',
            'blog_author_is_enabled',
            'blog_author_first_name',
            'blog_author_last_name',
            'blog_author_pseudo',
            'blog_author_date_create',
            'blog_author_date_update'
        ]);

        $this->setPrimaryKeys([
            'blog_author_id'
        ]);

        $this->setNamesMap([
            'blog_author_id' => [
                'get'      => 'getId',
                'set'      => 'setId',
                'property' => 'id',
            ],
            'blog_author_is_enabled' => [
                'get'      => 'isEnabled',
                'set'      => 'setIsEnabled',
                'property' => 'isEnabled',
            ],
            'blog_author_first_name' => [
                'get'      => 'getFirstName',
                'set'      => 'setFirstName',
                'property' => 'firstName',
            ],
            'blog_author_last_name' => [
                'get'      => 'getLastName',
                'set'      => 'setLastName',
                'property' => 'lastName',
            ],
            'blog_author_pseudo' => [
                'get'      => 'getPseudo',
                'set'      => 'setPseudo',
                'property' => 'pseudo',
            ],
            'blog_author_date_create' => [
                'get'      => 'getDateCreate',
                'set'      => 'setDateCreate',
                'property' => 'dateCreate',
            ],
            'blog_author_date_update' => [
                'get'      => 'getDateUpdate',
                'set'      => 'setDateUpdate',
                'property' => 'dateUpdate',
            ],
        ]);

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

        $this->setJoinConfigs([
        ]);
    }
}