<?php

namespace EasyFeishu\Tests\User\Authen;

use EasyFeishu\Mina\Mina;
use Mayunfeng\Supports\Collection;
use EasyFeishu\Tests\User\UserTest;

class AuthenTest extends UserTest
{

    public function testUserInfo()
    {
        $info = $this->getUser()->authen->userInfo(); // 调用user相关接口
        dump($info->toArray());
        $this->assertInstanceOf(Collection::class, $info);
    }
}
