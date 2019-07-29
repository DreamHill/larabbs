<?php
phpinfo();
// $sms = app('easysms');
// try {
//     $sms->send(15019197887, [
//         'content'  => '【龙稚科技】您的验证码是1234。如非本人操作，请忽略本短信',
//     ]);
// } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
//     $message = $exception->getException('yunpian')->getMessage();
//     dd($message);
// }

// 获取基础信息接口
// https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx106e88479d72ccb9&redirect_uri=http://www.foodshores.com&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect
// 返回的获取授权码
// http://www.foodshores.com/?code=081OuQ8D0Nn0wk2KLO8D0mzz8D0OuQ8I&state=STATE
// 获取openid
// https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx106e88479d72ccb9&secret=27a15d4d9c36c02995dae1bbd93c5f7b&code=081OuQ8D0Nn0wk2KLO8D0mzz8D0OuQ8I&grant_type=authorization_code
// 返回openid 和 执行一次的 token
// {"access_token":"23_0LCT7IQXI7aUIpZE1JI5m9o3oV02hufOUKK54QcngjZaOsOADJtsgqznwuyvR3KQGB1RlczDsS4rwwHzbOcq7w","expires_in":7200,"refresh_token":"23_4J2InvDBfXbiaciqfYk8YwgG0s5hHQtOsZd4InNHFtRa8lhhQGWsQS7EacymfipbqYw3iUwn7F1ub9Fjo-wFlA","openid":"o4c5Twg885iw53FeEAZsK3tBSbTQ","scope":"snsapi_userinfo"}
// 获取个人信息
// https://api.weixin.qq.com/sns/userinfo?access_token=23_0LCT7IQXI7aUIpZE1JI5m9o3oV02hufOUKK54QcngjZaOsOADJtsgqznwuyvR3KQGB1RlczDsS4rwwHzbOcq7w&openid=o4c5Twg885iw53FeEAZsK3tBSbTQ&lang=zh_CN
// 返回个人信息
// {"openid":"o4c5Twg885iw53FeEAZsK3tBSbTQ","nickname":"Farr","sex":1,"language":"zh_CN","city":"深圳","province":"广东","country":"中国","headimgurl":"http:\/\/thirdwx.qlogo.cn\/mmopen\/vi_32\/bIQNortgFxgf6ghFRFWvnaSGIFXcxpjiboC2mbHdWYcibdCtFTtfTDuqITMRpemUyOOZ2Kc1nic4oVJzQlaRpz6SA\/132","privilege":[]}


//  $accessToken = '23_a9cArcCjt9HPyGsRRnSjg2fshsW4KYG64db36mltyD6cUi8J1eaPMGF3slMD_S7b4FNxRoyT7u0i5_GVK57-PQ';
//  $openID = 'o4c5Twg885iw53FeEAZsK3tBSbTQ';
//  $driver = Socialite::driver('weixin');
//  $driver->setOpenId($openID);
//  $oauthUser = $driver->userFromToken($accessToken);
?>
