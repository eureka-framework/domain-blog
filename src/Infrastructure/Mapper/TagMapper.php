<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper;

use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Component\Orm\Query\SelectBuilder;
use Eureka\Domain\Blog\Entity\Tag;
use Eureka\Domain\Blog\Repository\TagRepositoryInterface;

/**
 * Mapper class for table "blog_tag"
 *
 * @author Eureka Orm Generator
 */
class TagMapper extends Abstracts\AbstractTagMapper implements TagRepositoryInterface
{
    /**
     * @return Tag[]
     * @throws OrmException
     */
    public function findAll(): iterable
    {
        $queryBuilder = new SelectBuilder($this);

        return $this->select($queryBuilder);
    }
}
