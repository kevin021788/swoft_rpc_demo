<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 用户表

 * @Entity()
 * @Table(name="user")
 * @uses      User
 */
class User extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $account 帐号
     * @Column(name="account", type="string", length=20)
     */
    private $account;

    /**
     * @var string $password 密码
     * @Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string $username 昵称
     * @Column(name="username", type="string", length=20)
     */
    private $username;

    /**
     * @var string $regTime 注册时间
     * @Column(name="reg_time", type="datetime")
     * @Required()
     */
    private $regTime;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 帐号
     * @param string $value
     * @return $this
     */
    public function setAccount(string $value): self
    {
        $this->account = $value;

        return $this;
    }

    /**
     * 密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 昵称
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * 注册时间
     * @param string $value
     * @return $this
     */
    public function setRegTime(string $value): self
    {
        $this->regTime = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 帐号
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * 密码
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 昵称
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 注册时间
     * @return string
     */
    public function getRegTime()
    {
        return $this->regTime;
    }

}
