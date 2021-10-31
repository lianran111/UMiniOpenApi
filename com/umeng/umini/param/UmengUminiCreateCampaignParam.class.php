<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiCreateCampaignParam
{

    /**
     * @return 数据源id（AppKey）
     */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }

    /**
     * 设置数据源id（AppKey）
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }

    /**
     * @return 推广活动
     */
    public function getCampaignName()
    {
        $tempResult = $this->sdkStdResult["campaignName"];
        return $tempResult;
    }

    /**
     * 设置推广活动
     * @param String $campaignName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCampaignName($campaignName)
    {
        $this->sdkStdResult["campaignName"] = $campaignName;
    }

    /**
     * @return 推广渠道
     */
    public function getChannelName()
    {
        $tempResult = $this->sdkStdResult["channelName"];
        return $tempResult;
    }

    /**
     * 设置推广渠道
     * @param String $channelName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setChannelName($channelName)
    {
        $this->sdkStdResult["channelName"] = $channelName;
    }

    /**
     * @return 落地页路径
     */
    public function getPath()
    {
        $tempResult = $this->sdkStdResult["path"];
        return $tempResult;
    }

    /**
     * 设置落地页路径
     * @param String $path
     * 参数示例：<pre></pre>
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setPath($path)
    {
        $this->sdkStdResult["path"] = $path;
    }

    private $sdkStdResult = [];

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }

}

?>