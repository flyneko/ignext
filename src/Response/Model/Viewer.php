<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * Viewer.
 *
 * @method EligiblePromotions getEligiblePromotions()
 * @method bool isEligiblePromotions()
 * @method $this setEligiblePromotions(EligiblePromotions $value)
 * @method $this unsetEligiblePromotions()
 */
class Viewer extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'eligible_promotions'   => 'EligiblePromotions',
    ];
}
