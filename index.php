<?php
@data_default_timezone_set("Asia/Taipei");
$current_datetime = @date('Y-m-d H:i:s',@time());
echo "service @current_datetime:".file_get_contents('/etc/hostname')."\n";
 ?>
