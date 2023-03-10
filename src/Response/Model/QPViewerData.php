<?php

namespace InstagramNextAPI\Response\Model;

use InstagramNextAPI\AutoPropertyMapper;

/**
 * QPViewerData.
 *
 * @method Viewer getViewer()
 * @method bool isViewer()
 * @method $this setViewer(Viewer $value)
 * @method $this unsetViewer()
 */
class QPViewerData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'viewer'   => 'Viewer',
    ];
}
