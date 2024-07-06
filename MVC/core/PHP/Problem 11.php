<?php
echo round(disk_total_space("C:")/1024/1024/1024/1024,2). " ". "Terabytes"."<br>";
echo round(disk_total_space("D:")/1024/1024/1024/1024,2). " ". "Terabytes"."<br>";
?>


<?php
echo "Size In Megabyte Is ".round(filesize("Hollow-Purple.mp4")/1024/1024) ."<br>";
echo "Size In Kilobyte Is ".round(filesize("Hollow-Purple.mp4")/1024) ."<br>";
?>



<?php
mkdir("Programming/PHP",0711,true);
if(file_exists("Programming/PHP")){
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed"."<br>";
}
if(file_exists("Programming")){
    rmdir("Programming");
    echo "Directory Programming Removed"."<br>";
}

?>



<?php
function change_permissions($filename){
    if(!is_dir($filename)){
        if(pathinfo($filename, PATHINFO_EXTENSION)==="txt"){
            chmod($filename,0600);
            return "Permissions Changed". "<br>";

        }
        else{
            return "File Extension Is Not Txt". "<br>";
        }
    }
    else{
        return "This Is Directory And Only Files Allowed". "<br>";
    }
}

echo change_permissions("Elzero");
echo change_permissions("Work.docx");
echo change_permissions("Result.txt");
?>



<?php
echo basename("index.php")."<br>";
echo basename(__FILE__). "<br>";
echo pathinfo(__FILE__)["basename"]. "<br>";
echo pathinfo(__FILE__,PATHINFO_BASENAME). "<br>";
?>


<?php
$handle = fopen("elzero.txt","r");

#1
echo fgets($handle);
echo fgets($handle);
echo "<br>";

rewind($handle);

#2
for($i = 0 ;$i < count(file("elzero.txt"))-1;$i++){
    echo fgets($handle);
}
echo "<br>";

rewind($handle);


#3
$i =0;
while($i<count(file("elzero.txt"))-1){
    echo fgets($handle);
    $i++;
}
echo "<br>";

fseek($handle,0);

#4
$file_content = file("elzero.txt");
echo implode(" ", array_slice($file_content, 0, 2));

#echo ftell($handle). "<br>";

fclose($handle);
?>



<?php
$filecontent = file_get_contents("elzero.txt");
$newfilecontent = str_replace("Osamaa", "Elzero", $filecontent);
echo file_put_contents("elzero.txt",$newfilecontent);
?>



