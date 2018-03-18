<?php
$directory = 'image'; 

$allowed_types=array('jpg','jpeg','gif','png'); 
$file_parts=array(); 
$ext=''; 
$title=''; 
$i=0; 

$dir_handle = @opendir($directory) or die("there is an error with your image directory!"); 

while ($file = readdir($dir_handle)) 
{ 
if($file=='.' || $file == '..') continue; 

$file_parts = explode('.',$file); 
$ext = strtolower(array_pop($file_parts)); 

$title = implode('.',$file_parts); 
$title = htmlspecialchars($title); 

$nomargin=''; 

if(in_array($ext,$allowed_types)) 
{ 
if(($i+1)%4==0) $nomargin='nomargin'; 

echo ' 
<div> 


<p><img class="alignnone wp-image-90 size-full" src="'.$directory.'/'.$file.'" alt="" width="600" height="300"></p>


</div>'; 

$i++; 
} 
} 

closedir($dir_handle);

?>
