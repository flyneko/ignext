<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * LayoutContent.
 *
 * @method ExploreItemInfo getExploreItemInfo()
 * @method string getFeedType()
 * @method SectionMedia[] getFillItems()
 * @method FullItem getFullItem()
 * @method SectionMedia[] getMedias()
 * @method Tag[] getRelated()
 * @method string getRelatedStyle()
 * @method TabsInfo getTabsInfo()
 * @method TwoByTwoItem getTwoByTwoItem()
 * @method bool isExploreItemInfo()
 * @method bool isFeedType()
 * @method bool isFillItems()
 * @method bool isFullItem()
 * @method bool isMedias()
 * @method bool isRelated()
 * @method bool isRelatedStyle()
 * @method bool isTabsInfo()
 * @method bool isTwoByTwoItem()
 * @method $this setExploreItemInfo(ExploreItemInfo $value)
 * @method $this setFeedType(string $value)
 * @method $this setFillItems(SectionMedia[] $value)
 * @method $this setFullItem(FullItem $value)
 * @method $this setMedias(SectionMedia[] $value)
 * @method $this setRelated(Tag[] $value)
 * @method $this setRelatedStyle(string $value)
 * @method $this setTabsInfo(TabsInfo $value)
 * @method $this setTwoByTwoItem(TwoByTwoItem $value)
 * @method $this unsetExploreItemInfo()
 * @method $this unsetFeedType()
 * @method $this unsetFillItems()
 * @method $this unsetFullItem()
 * @method $this unsetMedias()
 * @method $this unsetRelated()
 * @method $this unsetRelatedStyle()
 * @method $this unsetTabsInfo()
 * @method $this unsetTwoByTwoItem()
 */
class LayoutContent extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'related_style'     => 'string',
        'related'           => 'Tag[]',
        'medias'            => 'SectionMedia[]',
        'feed_type'         => 'string',
        'fill_items'        => 'FillItems[]',
        'explore_item_info' => 'ExploreItemInfo',
        'tabs_info'         => 'TabsInfo',
        'full_item'         => 'FullItem',
        'two_by_two_item'   => 'TwoByTwoItem',
        'fill_items'        => 'SectionMedia[]',
    ];
}
