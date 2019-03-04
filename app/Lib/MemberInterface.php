<?php
/**
 * Created by kevin0217@126.com
 * User: 曾剑杰
 * Date: 2019-03-01
 * Time: 14:23
 */
namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * Interface MemberInterface
 * @package App\Lib
 *
 * @method ResultInterface deferGetMemberById(int $id)
 */
interface MemberInterface
{
    public function getMemberById(int $id);
}