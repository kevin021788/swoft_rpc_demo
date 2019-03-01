<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-02-22
 * Time: 16:51
 */
namespace App\Services;

use App\Lib\UserInterface;
use App\Models\Logic\UserLogic;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;

/**
 * User servcie
 *
 * @Service()
 * @method ResultInterface deferRegister(array $info)
 * @method ResultInterface deferLogin(string $account, string $password)
 * @method ResultInterface deferInfo(int $id, array $cond)*/
class UserService implements UserInterface
{

    /**
     *
     * @Inject()
     * @var UserLogic
     */
    private $userLogic;

    public function __call($name, $arguments) {
        // TODO: Implement @method ResultInterface deferRegister(array $info)
    }

    /**
     * 注册
     * @param array $info
     *
     * @return mixed
     */
    public function register(array $info) {
        return $this->userLogic->register($info);
    }

    /**
     * 登录
     * @Strings(name="account", min=4, max=32)
     * @Strings(name="password", min=6, max=32)
     *
     * @param $account
     * @param $password
     * @return mixed
     */
    public function login(string $account, string $password) {
        return $this->userLogic->login($account, $password);
    }

    /**
     * 用户信息
     * @param $id
     * @param $cond
     * @return mixed
     */
    public function info(int $id, array $cond) {
        return $this->userLogic->info($id, $cond);
    }
}