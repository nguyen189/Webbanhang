<?php
// Xử lý và hiển thị thông báo thành công 
if(isset($success_msg)){
   foreach($success_msg as $success_msg){
      echo '<script>swal("'.$success_msg.'", "", "success");</script>';
   }
}
// Hiển thị cảnh báo
if(isset($warning_msg)){
   foreach($warning_msg as $warning_msg){
      echo '<script>swal("'.$warning_msg.'", "", "warning");</script>';
   }
}
// Hiển thị lỗi
if(isset($error_msg)){
   foreach($error_msg as $error_msg){
      echo '<script>swal("'.$error_msg.'", "", "error");</script>';
   }
}
// hiển thị các thông báo ìnoft
if(isset($info_msg)){
   foreach($info_msg as $info_msg){
      echo '<script>swal("'.$info_msg.'", "", "info");</script>';
   }
}

?>