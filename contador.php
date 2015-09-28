<?
$str = "";
for($i=0;$i<100;$i++){
    if($i%3==0){
        $str .= "fizz";
    }
    if($i%5==0){
        $str .= "buzz";
    }
    if($str==""){
        echo $i;
    }
    echo $str;
    echo " >>> ";
    $str="";
}
?>