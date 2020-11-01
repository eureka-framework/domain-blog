<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper;

use Eureka\Component\Orm\Exception\InvalidQueryException;
use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Component\Orm\Query\SelectBuilder;
use Eureka\Domain\Blog\Entity\Post;
use Eureka\Domain\Blog\Enum\PostStatus;
use Eureka\Domain\Blog\Repository\PostRepositoryInterface;

/**
 * Mapper class for table "blog_post"
 *
 * @author Eureka Orm Generator
 */
class PostMapper extends Abstracts\AbstractPostMapper implements PostRepositoryInterface
{
    /**
     * @param int $number
     * @param int $status
     * @return Post[]
     * @throws InvalidQueryException
     * @throws OrmException
     */
    public function findLatest(int $number = 10, int $status = PostStatus::PUBLISHED): iterable
    {
        if ($number < 1) {
            throw new \OutOfRangeException('Number of latest post must be greater than 0!', 10001);
        }
        $queryBuilder = new SelectBuilder($this);

        $queryBuilder->addOrder('blog_post_id', 'DESC');
        $queryBuilder->setLimit($number);
        $queryBuilder->addWhere('blog_post_status', $status);

        return $this->select($queryBuilder);
    }
}
