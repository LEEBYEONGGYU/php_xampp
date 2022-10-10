<?

ob_start();


$downfile=$_GET['file'];

$path='../../upload/'.$downfile;

if(file_exists($path) && is_file($path)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$downfile);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize($path));
    ob_clean();
    flush();
    readfile($path);


}else{
    ?>
	<script>
		alert('파일이 없습니다.');
		history.back();
	</script>
<?
    
}
?>



