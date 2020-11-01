<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Infrastructure\Mapper;

use Eureka\Domain\Blog\Repository\AuthorRepositoryInterface;

/**
 * Mapper class for table "blog_author"
 *
 * @author Eureka Orm Generator
 */
class AuthorMapper extends Abstracts\AbstractAuthorMapper implements AuthorRepositoryInterface
{
}
