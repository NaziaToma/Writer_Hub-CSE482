<?php

$conn= mysqli_connect('localhost','root','','blog_platform');
if(isset($_COOKIE['visit'])){

}else{
    setCookie('visit', 'yes', time()+(60*60*24*30));
    mysqli_query($conn, "update visit set total_count = total_count+1");
}
?>