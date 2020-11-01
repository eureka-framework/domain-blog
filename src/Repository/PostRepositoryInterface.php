<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Repository;

use Eureka\Component\Orm\Exception\InvalidQueryException;
use Eureka\Component\Orm\Exception\OrmException;
use Eureka\Component\Orm\RepositoryInterface;
use Eureka\Domain\Blog\Entity\Post;
use Eureka\Domain\Blog\Enum\PostStatus;

/**
 * Post repository interface.
 *
 * @author Eureka Orm Generator
 */
interface PostRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $number
     * @param int $status
     * @return Post[]
     * @throws InvalidQueryException
     * @throws OrmException
     */
    public function findLatest(int $number = 10, int $status = PostStatus::PUBLISHED): iterable;
}
