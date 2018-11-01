<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
        //
        // 设置邮件服务器账号
  public function test()
  {
    $transport = (new \Swift_SmtpTransport('smtp.126.com', 25))->setUsername('czxy_qz@126.com')->setPassword('12345678abcdefg');      

    // 创建发邮件对象
    $mailer = new \Swift_Mailer($transport);

    // 创建邮件消息
    $message = new \Swift_Message();
    $message->setSubject('新电商项目注册') 
    ->setFrom(['czxy_qz@126.com' => 'czxy_qz'])  
    ->setTo(['294736877@qq.com', '294736877@qq.com' => 'ftd'])
    ->setBody('Hello World ~', 'text/html');    

    // 发送邮件
    $mailer->send($message);
  }
}
