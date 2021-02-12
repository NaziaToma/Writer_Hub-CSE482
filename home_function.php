<?php include('connection.php');

?>



<?php 
    //show from database raw
    $sql= " SELECT * FROM post;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0){

while ($show_post = mysqli_fetch_assoc($result)){
    ?>



<div class="post">
    <div class="post-preview">
        <img src="<?php echo 'images/' . $show_post['featured_image']; ?>" class="post_image" alt="">
        <h2><?php echo $show_post['title'];?></h2>
        <i class="far fa-calendar"><?php echo date("F j, Y ", strtotime($show_post["created_at"])); ?></i>
        <p class="preview-text">
            <?php echo $show_post['body'];?>
        </p>
        <a href="single.php?id=<?php echo $show_post['ID']; ?>" class="btn1 read-more">Read more</a>
    </div>
</div>
<?php
}
}
?>