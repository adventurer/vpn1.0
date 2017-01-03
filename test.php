<?php
// 1. 初始化
 $ch = curl_init();
 // 2. 设置选项，包括URL
 curl_setopt($ch,CURLOPT_URL,"https://api.vultr.com/v1/server/bandwidth?SUBID=4653179");
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_HEADER,array('API-Key:6PEVEA2SFEB2QYSCTEALFM57MVFYOHCOZUXQ'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 信任任何证书  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // 检查证书中是否设置域名 
 $output = curl_exec($ch);
 if($output === FALSE ){
 echo "CURL Error:".curl_error($ch);
 }
 // 4. 释放curl句柄
 curl_close($ch);
print_r($output);
