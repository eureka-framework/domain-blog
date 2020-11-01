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

/**
 * DataMapper Data class for table "blog_tag"
 *
 * @author Eureka Orm Generator
 */
class Tag extends Abstracts\AbstractTag implements EntityInterface
{
    /**
     * @return int
     * @throws
     */
    public function countArticles(): int
    {
        return count($this->getAllPostsTag());
    }
}
