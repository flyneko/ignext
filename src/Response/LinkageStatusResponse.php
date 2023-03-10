<?php

namespace InstagramNextAPI\Response;

use InstagramNextAPI\Response;

/**
 * LinkageStatusResponse.
 *
 * @method mixed getLinkage()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isLinkage()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setLinkage(mixed $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetLinkage()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class LinkageStatusResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'linkage'             => '',
    ];
}
