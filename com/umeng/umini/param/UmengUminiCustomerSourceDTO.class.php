<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiCustomerSourceDTO extends SDKDomain
{

    private $id;

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置id
     * @param String $id
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }

    private $name;

    /**
     * @return 名称
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }

    private $url;

    /**
     * @return URL(仅推广活动可用)
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 设置URL(仅推广活动可用)
     * @param String $url
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    private $onceDuration;

    /**
     * @return 次均停留时长（H5暂不支持）
     */
    public function getOnceDuration()
    {
        return $this->onceDuration;
    }

    /**
     * 设置次均停留时长（H5暂不支持）
     * @param String $onceDuration
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOnceDuration($onceDuration)
    {
        $this->onceDuration = $onceDuration;
    }

    private $activeUser;

    /**
     * @return 活跃用户
     */
    public function getActiveUser()
    {
        return $this->activeUser;
    }

    /**
     * 设置活跃用户
     * @param Long $activeUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveUser($activeUser)
    {
        $this->activeUser = $activeUser;
    }

    private $newUser;

    /**
     * @return 新增用户
     */
    public function getNewUser()
    {
        return $this->newUser;
    }

    /**
     * 设置新增用户
     * @param Long $newUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }

    private $launch;

    /**
     * @return 打开次数（H5暂不支持）
     */
    public function getLaunch()
    {
        return $this->launch;
    }

    /**
     * 设置打开次数（H5暂不支持）
     * @param Long $launch
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;
    }

    private $visitTimes;

    /**
     * @return 页面访问次数
     */
    public function getVisitTimes()
    {
        return $this->visitTimes;
    }

    /**
     * 设置页面访问次数
     * @param Long $visitTimes
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitTimes($visitTimes)
    {
        $this->visitTimes = $visitTimes;
    }

    private $createDateTime;

    /**
     * @return 创建时间(仅推广活动可用)
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * 设置创建时间(仅推广活动可用)
     * @param String $createDateTime
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCreateDateTime($createDateTime)
    {
        $this->createDateTime = $createDateTime;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("name", $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("url", $this->stdResult)) {
            $this->url = $this->stdResult->{"url"};
        }
        if (array_key_exists("onceDuration", $this->stdResult)) {
            $this->onceDuration = $this->stdResult->{"onceDuration"};
        }
        if (array_key_exists("activeUser", $this->stdResult)) {
            $this->activeUser = $this->stdResult->{"activeUser"};
        }
        if (array_key_exists("newUser", $this->stdResult)) {
            $this->newUser = $this->stdResult->{"newUser"};
        }
        if (array_key_exists("launch", $this->stdResult)) {
            $this->launch = $this->stdResult->{"launch"};
        }
        if (array_key_exists("visitTimes", $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{"visitTimes"};
        }
        if (array_key_exists("createDateTime", $this->stdResult)) {
            $this->createDateTime = $this->stdResult->{"createDateTime"};
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['id'];
        }
        if (array_key_exists("name", $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists("url", $this->arrayResult)) {
            $this->url = $arrayResult['url'];
        }
        if (array_key_exists("onceDuration", $this->arrayResult)) {
            $this->onceDuration = $arrayResult['onceDuration'];
        }
        if (array_key_exists("activeUser", $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists("newUser", $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists("launch", $this->arrayResult)) {
            $this->launch = $arrayResult['launch'];
        }
        if (array_key_exists("visitTimes", $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
        if (array_key_exists("createDateTime", $this->arrayResult)) {
            $this->createDateTime = $arrayResult['createDateTime'];
        }
    }

}

?>