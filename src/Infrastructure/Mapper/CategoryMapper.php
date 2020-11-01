<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper;

use Eureka\Domain\Blog\Entity\Category;
use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Component\Orm\Query\SelectBuilder;
use Eureka\Domain\Blog\Repository\CategoryRepositoryInterface;

/**
 * Mapper class for table "blog_category"
 *
 * @author Eureka Orm Generator
 */
class CategoryMapper extends Abstracts\AbstractCategoryMapper implements CategoryRepositoryInterface
{
    /**
     * @return Category[]
     * @throws OrmException
     */
    public function findAll(): iterable
    {
        $queryBuilder = new SelectBuilder($this);

        return $this->select($queryBuilder);
    }
}
