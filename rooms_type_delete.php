<?php
  include_once('Include/connection.php');

  $where['id']=$_GET['id'];

  $data['updated_at']=date('Y-m-d H:i:s');
  $data['updated_by']=$_SESSION['user']->id;
  $data['status']=0;
  $res=$mysqli->common_update('rooms_type',$data,$where);
  if(!$res['error']){
    echo "<script>location.href='".$baseurl."rooms_type.php'</script>";
  }else{
    echo $res['error_msg'];
  }
?>
