<?php
$files = $_FILES;
if(empty($files)) die;
$data = [];
foreach ($files as $key => $file) {
  $filename = './'.time().rand(1,500);
  if(move_uploaded_file($file['tmp_name'], $filename)){
    $arr = ['msg'=>$key.'图片上传成功','code'=>200];
  }else{
    $arr = ['msg'=>$key.'图片上传失败','code'=>500];
  }
  $data[] = $arr;
}
echo json_encode($data);
