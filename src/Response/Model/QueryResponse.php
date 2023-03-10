<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * QueryResponse.
 *
 * @method ShadowInstagramUser getShadowInstagramUser()
 * @method bool isShadowInstagramUser()
 * @method $this setShadowInstagramUser(ShadowInstagramUser $value)
 * @method $this unsetShadowInstagramUser()
 */
class QueryResponse extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'shadow_instagram_user' => 'ShadowInstagramUser',
    ];
}
