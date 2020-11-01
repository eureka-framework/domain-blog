<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Repository;

use Eureka\Component\Orm\RepositoryInterface;
use Eureka\Domain\Blog\Entity\Category;

/**
 * Category repository interface.
 *
 * @author Eureka Orm Generator
 */
interface CategoryRepositoryInterface extends RepositoryInterface
{
    /**
     * @return Category[]
     * @throws
     */
    public function findAll(): iterable;
}
