<?php

namespace InstagramNextAPI\Response;

use InstagramNextAPI\Response;

/**
 * CommentLikersResponse.
 *
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\User[] getUsers()
 * @method Model\_Message[] get_Messages()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool isUsers()
 * @method bool is_Messages()
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this setUsers(Model\User[] $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unsetUsers()
 * @method $this unset_Messages()
 */
class CommentLikersResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'users' => 'Model\User[]',
    ];
}
