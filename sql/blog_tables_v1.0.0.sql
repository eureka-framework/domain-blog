
CREATE TABLE `blog_tag` (
    `blog_tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `blog_tag_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`blog_tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blog_post_tag` (
    `blog_post_id` int(10) unsigned NOT NULL,
    `blog_tag_id` int(10) unsigned NOT NULL,
    PRIMARY KEY (`blog_post_id`,`blog_tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blog_post` (
    `blog_post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `blog_author_id` int(10) unsigned NOT NULL,
    `blog_category_id` smallint(5) unsigned NOT NULL DEFAULT 1,
    `blog_post_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: deleted, 1: draft, 2: in review, 3:published, 4: archived',
    `blog_post_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `blog_post_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `blog_post_thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `blog_post_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `blog_post_article` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `blog_post_date_create` datetime NOT NULL,
    `blog_post_date_update` datetime DEFAULT NULL,
    `blog_post_date_publication` datetime DEFAULT NULL,
    PRIMARY KEY (`blog_post_id`),
    KEY `idx_blog_author_id` (`blog_author_id`,`blog_post_date_publication`),
    KEY `idx_blog_category_id` (`blog_category_id`,`blog_post_date_publication`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blog_category` (
    `blog_category_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    `blog_category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`blog_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `blog_author` (
    `blog_author_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Author ID',
    `blog_author_is_enabled` tinyint(1) unsigned NOT NULL DEFAULT 1 COMMENT 'If the author is enabled or not',
    `blog_author_first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Author first name ',
    `blog_author_last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Author last name ',
    `blog_author_pseudo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Author pseudonyme',
    `blog_author_date_create` datetime NOT NULL COMMENT 'Creation date of the author in database',
    `blog_author_date_update` datetime DEFAULT NULL COMMENT 'Update date of the author in database',
    PRIMARY KEY (`blog_author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
