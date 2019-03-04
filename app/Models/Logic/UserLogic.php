<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Logic;

use Swoft\Bean\Annotation\Bean;
use Swoft\Log\Log;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use App\Models\Entity\User;

/**
 * 用户逻辑层
 * 同时可以被controller server task使用
 *
 * @Bean()
 * @uses      UserLogic
 * @version   2017年10月15日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserLogic
{


    /**
     * SQL
     * create table user (
     * id int primary key auto_increment COMMENT "ID",
     * account varchar(20)  COMMENT "帐号",
     * password varchar(20) COMMENT "密码",
     * username varchar(20) COMMENT "昵称",
     * reg_time datetime not null COMMENT "注册时间"
     * ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT "用户表";
     *
     * 生成实体命令
     * php bin/swoft entity:create -d user
     */


    /**
     * 加盐
     * @var string
     */
    private $passwordSolt = "____kevin";

    /**
     * 生成加密字符串
     * @param $password
     * @return string
     */
    protected function genPassword($password)
    {
        return md5($password . $this->passwordSolt);
    }

    /**
     * 注册用户
     * @param array $info
     * @return mixed
     */
    public function register(array $info)
    {
        $user = new User();
        $info['password'] = $this->genPassword($info['password']);
        $info['regTime'] = date('Y-m-d H:i:s');
        return (null === ($rs = $user->fill($info)->save()->getResult())) ? false : $rs;
    }

    /**
     * 用户登录
     * @param string $account
     * @param string $password
     * @return mixed
     */
    public function login(string $account, string $password)
    {
        $cond = [
            'account' => $account,
            'password' => $this->genPassword($password),
        ];
        return (null === ($rs = User::findOne($cond)->getResult())) ? false : $rs;
    }

    /**
     * 用户信息
     * @param int $id
     * @param array $cond
     * @return mixed
     */
    public function info(int $id, array $cond)
    {
        $cond['id'] = $id;
        return (null === ($rs = User::findOne($cond)->getResult())) ? false : $rs;
    }

}