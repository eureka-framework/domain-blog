<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Entity;

use Eureka\Component\Orm\EntityInterface;
use Eureka\Component\Orm\Exception\OrmException;

/**
 * DataMapper Data class for table "blog_category"
 *
 * @author Eureka Orm Generator
 */
class Category extends Abstracts\AbstractCategory implements EntityInterface
{
    /**
     * @return int
     * @throws OrmException
     */
    public function countArticles(): int
    {
        return count($this->getAllPosts());
    }
}
