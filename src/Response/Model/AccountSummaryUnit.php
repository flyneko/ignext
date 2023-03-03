<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * AccountSummaryUnit.
 *
 * @method int getPostsCount()
 * @method bool isPostsCount()
 * @method $this setPostsCount(int $value)
 * @method $this unsetPostsCount()
 */
class AccountSummaryUnit extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'posts_count'          => 'int',
    ];
}
