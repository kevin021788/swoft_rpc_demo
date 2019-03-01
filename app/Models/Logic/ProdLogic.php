<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-02-28
 * Time: 16:29
 */
namespace App\Models\Logic;

use App\Models\Entity\Prod;
use Swoft\Bean\Annotation\Bean;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use Swoft\Bean\Annotation\Inject;


/**
 * 产品逻辑层
 * @Bean()
 * @uses IndexLogic
 * Class ProdLogic
 * @package App\Models\Logic
 */
class ProdLogic
{
    /**
     * 添加一条记录
     * @param array $info
     * @return mixed
     */
    public function addProd(array $info)
    {
        $model = new Prod();
        $info['time'] = time();
        return $model->fill($info)->save()->getResult();
    }

    /**
     * 查找一条记录
     * @param int $id
     * @param array $cond
     * @return mixed
     */
    public function findProd(int $id, array $cond)
    {
        $cond['id'] = $id;
        return Prod::findOne($cond)->getResult();
    }

    /**
     * 删除一条记录
     * @param int $id
     * @return mixed
     */
    public function delProd(int $id)
    {
        return Prod::deleteById($id)->getResult();
    }

    /**
     * 更新一条记录
     * @param int $id
     * @param array $info
     * @return mixed
     */
    public function modifyProd(int $id,array $info)
    {
        $cond['id'] = $id;
        return Prod::updateOne($info, $cond)->getResult();
    }

}