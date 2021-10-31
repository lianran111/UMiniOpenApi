<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiGetMultiIndiceListParam
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
     * 参数示例：<pre>1dfe1b2f3597245664499a91</pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }

    private $sdkStdResult = [];

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }

}

?>