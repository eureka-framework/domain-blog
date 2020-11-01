<?php

/*
 * Copyright (c) Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Eureka\Domain\Blog\Enum;

/**
 * Class Enumerator for Post Status
 *
 * @author Romain Cottard
 */
final class PostStatus
{
    public const DELETED   = 0;
    public const DRAFT     = 1;
    public const IN_REVIEW = 2;
    public const PUBLISHED = 3;
    public const ARCHIVED  = 4;

    /**
     * Class constructor.
     *
     * @codeCoverageIgnore
     */
    private function __construct()
    {
       //~ Disable constructor
    }
}
