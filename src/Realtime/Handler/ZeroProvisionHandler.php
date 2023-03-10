<?php

namespace InstagramNextAPI\Realtime\Handler;

use InstagramNextAPI\Realtime\HandlerInterface;
use InstagramNextAPI\Realtime\Message;
use InstagramNextAPI\Realtime\Payload\ZeroProvisionEvent;

class ZeroProvisionHandler extends AbstractHandler implements HandlerInterface
{
    const MODULE = 'zero_provision';

    /** {@inheritdoc} */
    public function handleMessage(
        Message $message)
    {
        $data = $message->getData();
        if (!isset($data['zero_product_provisioning_event']) || !is_array($data['zero_product_provisioning_event'])) {
            throw new HandlerException('Invalid zero provision (event data is missing).');
        }
        $provision = new ZeroProvisionEvent($data['zero_product_provisioning_event']);
        $this->_target->emit('zero-provision', [$provision]);
    }
}
