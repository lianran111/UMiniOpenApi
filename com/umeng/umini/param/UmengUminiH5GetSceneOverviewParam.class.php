<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiH5GetSceneOverviewParam
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
     * @return 开始时间
     */
    public function getFromDate()
    {
        $tempResult = $this->sdkStdResult["fromDate"];
        return $tempResult;
    }

    /**
     * 设置开始时间
     * @param String $fromDate
     * 参数示例：<pre>2020-09-10</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult["fromDate"] = $fromDate;
    }

    /**
     * @return 结束时间
     */
    public function getToDate()
    {
        $tempResult = $this->sdkStdResult["toDate"];
        return $tempResult;
    }

    /**
     * 设置结束时间
     * @param String $toDate
     * 参数示例：<pre>2020-09-10</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult["toDate"] = $toDate;
    }

    /**
     * @return 时间颗粒度（枚举范围day,7day,30day）
     */
    public function getTimeUnit()
    {
        $tempResult = $this->sdkStdResult["timeUnit"];
        return $tempResult;
    }

    /**
     * 设置时间颗粒度（枚举范围day,7day,30day）
     * @param String $timeUnit
     * 参数示例：<pre>day</pre>
     * 此参数必填     */
    public function setTimeUnit($timeUnit)
    {
        $this->sdkStdResult["timeUnit"] = $timeUnit;
    }

    /**
     * @return 排序指标（newUser：新增用户；activeUser：活跃用户；visitTimes：页面访问次数）
     */
    public function getOrderBy()
    {
        $tempResult = $this->sdkStdResult["orderBy"];
        return $tempResult;
    }

    /**
     * 设置排序指标（newUser：新增用户；activeUser：活跃用户；visitTimes：页面访问次数）
     * @param String $orderBy
     * 参数示例：<pre></pre>
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setOrderBy($orderBy)
    {
        $this->sdkStdResult["orderBy"] = $orderBy;
    }

    /**
     * @return 排序方向（desc：降序,asc：正序）
     */
    public function getDirection()
    {
        $tempResult = $this->sdkStdResult["direction"];
        return $tempResult;
    }

    /**
     * 设置排序方向（desc：降序,asc：正序）
     * @param String $direction
     * 参数示例：<pre></pre>
     * 此参数为可选参数
     * 默认值：<pre></pre>
     */
    public function setDirection($direction)
    {
        $this->sdkStdResult["direction"] = $direction;
    }

    private $sdkStdResult = [];

    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }

}

?>