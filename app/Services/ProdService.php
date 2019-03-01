<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-02-22
 * Time: 16:51
 */
namespace App\Services;

use App\Lib\ProdInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;
use App\Models\Logic\ProdLogic;
/**
 * @Service()
 */
class ProdService implements ProdInterface
{

    /**
     * @Inject()
     * @var ProdLogic
     */
    private $ProdLogic;

    public function __call($name, $arguments) {
        // TODO: Implement @method ResultInterface deferRegister(array $info)
    }

    public function addProd(array $info)
    {
        return $this->ProdLogic->addProd($info);
        // TODO: Implement addProd() method.
    }

    public function findProd(int $id, array $cond)
    {
        return $this->ProdLogic->findProd($id, $cond);
        // TODO: Implement findProd() method.
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