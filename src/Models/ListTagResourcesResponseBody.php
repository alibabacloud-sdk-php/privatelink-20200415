<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 8D8992C1-6712-423C-BAC5-E5E817484C6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagResources) {
            $res['TagResources'] = [];
            if (null !== $this->tagResources && \is_array($this->tagResources)) {
                $n = 0;
                foreach ($this->tagResources as $item) {
                    $res['TagResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['TagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? tagResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
