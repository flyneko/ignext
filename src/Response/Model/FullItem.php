<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * FullItem.
 *
 * @method Channel getChannel()
 * @method bool isChannel()
 * @method $this setChannel(Channel $value)
 * @method $this unsetChannel()
 */
class FullItem extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'channel'                 => 'Channel',
    ];
}
