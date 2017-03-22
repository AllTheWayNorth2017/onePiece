

<?php

  $url = 'http://hongyan.cqupt.edu.cn/redapi2/api/kebiao';
  $data = ['stuNum' => ];
  $ch = curl_init();
  $opt =  array(
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_URL => $url,
            CURLOPT_TIMEOUT => 30,          
          );
  curl_setopt_array($ch, $opt);
  $output = curl_exec($ch);
  echo $output;
  curl_close($ch);




    
    
   //  $ch = curl_init(); 
   //  $data = ['name'=> 'Lei', "msg" => "are you ok"];
   //  $output = curl_exec($ch); 
   //  //$data='{"name":"Lei","msg":"Are you OK?"}';
   //  curl_close($ch);      
   //  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);   //中断时间
   //  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length:' . strlen($data)));
   //  curl_setopt($ch, CURLOPT_POST, 1);    //请求方式 post
   //  curl_setopt($ch, CURLOPT_POSTFIELDS , $data);//post传参数
   //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
   //  curl_setopt($ch, CURLOPT_URL, "http://localhost/testRespond.php"); //请求
   //  echo $output;
   //  //创建了一个curl会话资源，成功返回一个句柄；
   //  //////////////
   //  echo output
   //  curl_close($ch);
   //  echo $output;


   // $ch = curl_init(); 
   // $output = curl_exec($ch); 
   // $output contains the output string 
   // close curl resource to free up system resources 
   // 将curl_exec()获取的信息以字符串返回，而不是直接输出
   // 设置URL
  // $ch = curl_init();
  //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  //  curl_setopt($ch, CURLOPT_URL, "www.baidu.com");
  //  $output = curl_exec($ch);
  //  file_put_contents('./test.php', $output);
  //  curl_close($ch);
  // $a = '/<td([^>]*?)>(?<value>[^<>]*?)<\/td>/is';

  // $string = "<td>sadradeqwf</td>";
  // $b = preg_match($a, $string, $result);
  // var_dump($b);
  // var_dump($result);
?>