<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-02-22
 * Time: 16:51
 */
namespace App\Services;

use Swoft\Bean\Annotation\Inject;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use App\Lib\TestInterface;
use App\Models\Logic\ProdLogic;
/**
 * @Service()
 */
class TestService implements TestInterface
{
    /**
     * @Inject()
     * @var ProdLogic
     */
    private $ProdLogic;

    public function getStr(string $str)
    {
        return ['我是服务端的====！！！' . $str];
    }

    public function findProd(int $id, array $cond)
    {
        return $this->ProdLogic->findProd($id, $cond);
        // TODO: Implement findProd() method.
    }
    public function addProd(array $info)
    {
        return $this->ProdLogic->addProd($info);
        // TODO: Implement addProd() method.
    }
    public function delProd(int $id)
    {
        return $this->ProdLogic->delProd($id);
        // TODO: Implement delProd() method.
    }
    public function modifyProd(int $id, array $info)
    {
        return $this->ProdLogic->modifyProd($id, $info);
        // TODO: Implement modifyProd() method.
    }

}
