<?php

namespace InstagramNextAPI\Response;

use InstagramNextAPI\Response;

/**
 * GetCollectionsListResponse.
 *
 * @method bool getAutoLoadMoreEnabled()
 * @method Model\Collection[] getItems()
 * @method mixed getMessage()
 * @method bool getMoreAvailable()
 * @method string getNextMaxId()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isAutoLoadMoreEnabled()
 * @method bool isItems()
 * @method bool isMessage()
 * @method bool isMoreAvailable()
 * @method bool isNextMaxId()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setAutoLoadMoreEnabled(bool $value)
 * @method $this setItems(Model\Collection[] $value)
 * @method $this setMessage(mixed $value)
 * @method $this setMoreAvailable(bool $value)
 * @method $this setNextMaxId(string $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetAutoLoadMoreEnabled()
 * @method $this unsetItems()
 * @method $this unsetMessage()
 * @method $this unsetMoreAvailable()
 * @method $this unsetNextMaxId()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class GetCollectionsListResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'items'                  => 'Model\Collection[]',
        'more_available'         => 'bool',
        'auto_load_more_enabled' => 'bool',
        'next_max_id'            => 'string',
    ];
}
