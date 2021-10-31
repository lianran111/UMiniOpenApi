<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiElementDTO extends SDKDomain
{

    private $elementId;

    /**
     * @return 元素ID
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * 设置元素ID
     * @param String $elementId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;
    }

    private $displayName;

    /**
     * @return 元素ID备注
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * 设置元素ID备注
     * @param String $displayName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    private $count;

    /**
     * @return 曝光次数
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * 设置曝光次数
     * @param Long $count
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    private $device;

    /**
     * @return 曝光人数
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * 设置曝光人数
     * @param Long $device
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("elementId", $this->stdResult)) {
            $this->elementId = $this->stdResult->{"elementId"};
        }
        if (array_key_exists("displayName", $this->stdResult)) {
            $this->displayName = $this->stdResult->{"displayName"};
        }
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("device", $this->stdResult)) {
            $this->device = $this->stdResult->{"device"};
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("elementId", $this->arrayResult)) {
            $this->elementId = $arrayResult['elementId'];
        }
        if (array_key_exists("displayName", $this->arrayResult)) {
            $this->displayName = $arrayResult['displayName'];
        }
        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("device", $this->arrayResult)) {
            $this->device = $arrayResult['device'];
        }
    }

}

?>