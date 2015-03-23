<?php
require_once('upyun.class.php');
require_once('config.php');
$upyun = new upyun("$bucketname", "$operator_name", "$operator_pwd","$UpYun_net");

//Check the file uploaded status
if ($_FILES['userfile']['error']>0) {
       echo "ProblemL";
       switch ($_FILES['userfile']['error']) {
       	case '1':
       		echo "file exceeded the max_upload_filesize";
       		break;
       	case '2':
       		echo "file exceeded the max_filesize";
       		break;
       	case '3':
       		echo "file just partially uploaded";
       		break;
       	case '4':
       		echo "file failed to upload";
       		break;
       	case '6':
       		echo "file didn't upload to appointed dir";
       		break;
       	case '7':
       		echo "file failed to write to the disk";
       		break;
       	default:
       		echo "Unknown error!";
       		break;
       }
    }

//upload module
if (is_uploaded_file($_FILES['upload_file']['tmp_name'])!= 0) {

	$file_name = $_FILES['upload_file']['name'];
	$file_tmpname = $_FILES['upload_file']['tmp_name'];
	$file_handler = fopen($file_tmpname, 'r');
	$upyun->writeFile('/'.$file_name, $file_handler,true);
  fclose($file_handler);

}
else{
	echo 'can not upload the file!';
exit;
}


//error!?
	try {
    $upyun->getFolderUsage('/');
    //your code here

} catch(Exception $e) {
    echo $e->getCode();     // 错误代码
    echo $e->getMessage();  // 具体错误信息
}



//echo the add
echo 'The file successfully uploaded.Return the URL:<br>';
echo $upyun_http.$file_name;

?>