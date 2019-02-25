<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-02-22
 * Time: 16:51
 */
namespace App\Services;

use App\Lib\TestInterface;
use Swoft\Rpc\Server\Bean\Annotation\Service;

/**
 * @Service()
 */
class TestService implements TestInterface
{
    public function getStr(string $str)
    {
        return ['这是服务商的内容-----我是服务端的' . $str];
    }

}
