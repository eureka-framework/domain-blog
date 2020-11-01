<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper;

use Eureka\Domain\Blog\Repository\PostTagRepositoryInterface;

/**
 * Mapper class for table "blog_post_tag"
 *
 * @author Eureka Orm Generator
 */
class PostTagMapper extends Abstracts\AbstractPostTagMapper implements PostTagRepositoryInterface
{
}
