<?php

include_once('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiH5DomainOrSceneDTO extends SDKDomain
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
     * @return 域名或场景名称
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置域名或场景名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
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
        if (array_key_exists("activeUser", $this->stdResult)) {
            $this->activeUser = $this->stdResult->{"activeUser"};
        }
        if (array_key_exists("newUser", $this->stdResult)) {
            $this->newUser = $this->stdResult->{"newUser"};
        }
        if (array_key_exists("visitTimes", $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{"visitTimes"};
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
        if (array_key_exists("activeUser", $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists("newUser", $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists("visitTimes", $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
    }

}

?>