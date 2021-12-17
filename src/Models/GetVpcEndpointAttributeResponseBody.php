<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class GetVpcEndpointAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endpointBusinessStatus;

    /**
     * @var string
     */
    public $endpointDescription;

    /**
     * @var string
     */
    public $endpointDomain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointStatus;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $payer;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resourceOwner;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $zoneAffinityEnabled;

    /**
     * @var int
     */
    public $zonePrivateIpAddressCount;
    protected $_name = [
        'bandwidth'                 => 'Bandwidth',
        'connectionStatus'          => 'ConnectionStatus',
        'createTime'                => 'CreateTime',
        'endpointBusinessStatus'    => 'EndpointBusinessStatus',
        'endpointDescription'       => 'EndpointDescription',
        'endpointDomain'            => 'EndpointDomain',
        'endpointId'                => 'EndpointId',
        'endpointName'              => 'EndpointName',
        'endpointStatus'            => 'EndpointStatus',
        'endpointType'              => 'EndpointType',
        'payer'                     => 'Payer',
        'regionId'                  => 'RegionId',
        'requestId'                 => 'RequestId',
        'resourceOwner'             => 'ResourceOwner',
        'serviceId'                 => 'ServiceId',
        'serviceName'               => 'ServiceName',
        'vpcId'                     => 'VpcId',
        'zoneAffinityEnabled'       => 'ZoneAffinityEnabled',
        'zonePrivateIpAddressCount' => 'ZonePrivateIpAddressCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpointBusinessStatus) {
            $res['EndpointBusinessStatus'] = $this->endpointBusinessStatus;
        }
        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }
        if (null !== $this->endpointDomain) {
            $res['EndpointDomain'] = $this->endpointDomain;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }
        if (null !== $this->zonePrivateIpAddressCount) {
            $res['ZonePrivateIpAddressCount'] = $this->zonePrivateIpAddressCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcEndpointAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndpointBusinessStatus'])) {
            $model->endpointBusinessStatus = $map['EndpointBusinessStatus'];
        }
        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }
        if (isset($map['EndpointDomain'])) {
            $model->endpointDomain = $map['EndpointDomain'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }
        if (isset($map['ZonePrivateIpAddressCount'])) {
            $model->zonePrivateIpAddressCount = $map['ZonePrivateIpAddressCount'];
        }

        return $model;
    }
}
