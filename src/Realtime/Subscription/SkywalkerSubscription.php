<?php

namespace InstagramNextAPI\Realtime\Subscription;

use InstagramNextAPI\Realtime\Mqtt;
use InstagramNextAPI\Realtime\SubscriptionInterface;

abstract class SkywalkerSubscription implements SubscriptionInterface
{
    /** @var string */
    protected $_accountId;

    /**
     * Constructor.
     *
     * @param string $accountId
     */
    public function __construct(
        $accountId)
    {
        $this->_accountId = $accountId;
    }

    /** {@inheritdoc} */
    public function getTopic()
    {
        return Mqtt\Topics::PUBSUB;
    }

    /** {@inheritdoc} */
    abstract public function getId();

    /** {@inheritdoc} */
    abstract public function __toString();
}
