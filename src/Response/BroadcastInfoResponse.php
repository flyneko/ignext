<?php

namespace InstagramNextAPI\Response;

use InstagramNextAPI\Response;

/**
 * BroadcastInfoResponse.
 *
 * @method string getBroadcastMessage()
 * @method Model\User getBroadcastOwner()
 * @method string getBroadcastStatus()
 * @method mixed getCobroadcasters()
 * @method string getCoverFrameUrl()
 * @method string getDashAbrPlaybackUrl()
 * @method string getDashLivePredictivePlaybackUrl()
 * @method string getDashManifest()
 * @method string getDashPlaybackUrl()
 * @method string getEncodingTag()
 * @method string getExpireAt()
 * @method bool getHideFromFeedUnit()
 * @method string getId()
 * @method bool getInternalOnly()
 * @method bool getIsGamingContent()
 * @method bool getIsPlayerLiveTraceEnabled()
 * @method string getMediaId()
 * @method mixed getMessage()
 * @method mixed getMuted()
 * @method int getNumberOfQualities()
 * @method string getOrganicTrackingToken()
 * @method string getPublishedTime()
 * @method mixed getRankedPosition()
 * @method string getRtmpPlaybackUrl()
 * @method mixed getSeenRankedPosition()
 * @method string getStatus()
 * @method int getTotalUniqueViewerCount()
 * @method int getViewerCount()
 * @method Model\_Message[] get_Messages()
 * @method bool isBroadcastMessage()
 * @method bool isBroadcastOwner()
 * @method bool isBroadcastStatus()
 * @method bool isCobroadcasters()
 * @method bool isCoverFrameUrl()
 * @method bool isDashAbrPlaybackUrl()
 * @method bool isDashLivePredictivePlaybackUrl()
 * @method bool isDashManifest()
 * @method bool isDashPlaybackUrl()
 * @method bool isEncodingTag()
 * @method bool isExpireAt()
 * @method bool isHideFromFeedUnit()
 * @method bool isId()
 * @method bool isInternalOnly()
 * @method bool isIsGamingContent()
 * @method bool isIsPlayerLiveTraceEnabled()
 * @method bool isMediaId()
 * @method bool isMessage()
 * @method bool isMuted()
 * @method bool isNumberOfQualities()
 * @method bool isOrganicTrackingToken()
 * @method bool isPublishedTime()
 * @method bool isRankedPosition()
 * @method bool isRtmpPlaybackUrl()
 * @method bool isSeenRankedPosition()
 * @method bool isStatus()
 * @method bool isTotalUniqueViewerCount()
 * @method bool isViewerCount()
 * @method bool is_Messages()
 * @method $this setBroadcastMessage(string $value)
 * @method $this setBroadcastOwner(Model\User $value)
 * @method $this setBroadcastStatus(string $value)
 * @method $this setCobroadcasters(mixed $value)
 * @method $this setCoverFrameUrl(string $value)
 * @method $this setDashAbrPlaybackUrl(string $value)
 * @method $this setDashLivePredictivePlaybackUrl(string $value)
 * @method $this setDashManifest(string $value)
 * @method $this setDashPlaybackUrl(string $value)
 * @method $this setEncodingTag(string $value)
 * @method $this setExpireAt(string $value)
 * @method $this setHideFromFeedUnit(bool $value)
 * @method $this setId(string $value)
 * @method $this setInternalOnly(bool $value)
 * @method $this setIsGamingContent(bool $value)
 * @method $this setIsPlayerLiveTraceEnabled(bool $value)
 * @method $this setMediaId(string $value)
 * @method $this setMessage(mixed $value)
 * @method $this setMuted(mixed $value)
 * @method $this setNumberOfQualities(int $value)
 * @method $this setOrganicTrackingToken(string $value)
 * @method $this setPublishedTime(string $value)
 * @method $this setRankedPosition(mixed $value)
 * @method $this setRtmpPlaybackUrl(string $value)
 * @method $this setSeenRankedPosition(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this setTotalUniqueViewerCount(int $value)
 * @method $this setViewerCount(int $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetBroadcastMessage()
 * @method $this unsetBroadcastOwner()
 * @method $this unsetBroadcastStatus()
 * @method $this unsetCobroadcasters()
 * @method $this unsetCoverFrameUrl()
 * @method $this unsetDashAbrPlaybackUrl()
 * @method $this unsetDashLivePredictivePlaybackUrl()
 * @method $this unsetDashManifest()
 * @method $this unsetDashPlaybackUrl()
 * @method $this unsetEncodingTag()
 * @method $this unsetExpireAt()
 * @method $this unsetHideFromFeedUnit()
 * @method $this unsetId()
 * @method $this unsetInternalOnly()
 * @method $this unsetIsGamingContent()
 * @method $this unsetIsPlayerLiveTraceEnabled()
 * @method $this unsetMediaId()
 * @method $this unsetMessage()
 * @method $this unsetMuted()
 * @method $this unsetNumberOfQualities()
 * @method $this unsetOrganicTrackingToken()
 * @method $this unsetPublishedTime()
 * @method $this unsetRankedPosition()
 * @method $this unsetRtmpPlaybackUrl()
 * @method $this unsetSeenRankedPosition()
 * @method $this unsetStatus()
 * @method $this unsetTotalUniqueViewerCount()
 * @method $this unsetViewerCount()
 * @method $this unset_Messages()
 */
class BroadcastInfoResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        Model\Broadcast::class, // Import property map.
    ];
}
