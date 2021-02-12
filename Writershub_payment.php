<?php

require('stripe-php-master/init.php');

$publishableKey="pk_test_51I3kfnEGACHpuUm5LHK1YHqoV2SJ82D8NgaeIIJbacXke1yyWzpG0wOlGWHDKi7wxvx7QggyUtTPej0StzDCMuAv00UjbVnQHV";

$secretKey="sk_test_51I3kfnEGACHpuUm5LGvzU2cuCsV1yYfAEuV7GQNw3FgWeCqo8KQjCQk8YJ61curuuNLWo0Svw8abYwGOF5bfTcgW002WDCjmXF";

\Stripe\Stripe::setApiKey($secretKey);



if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];

    $data=\Stripe\Charge::create(array(
        "amount"=>1000,
        "currency"=>"usd",
        "description"=>"Writers Hub",
        "source"=>$token,
    ));
    echo "<pre>";
}

?>

<?php 
include('connection.php');
 $i=$_GET['id'];
 $sql= " SELECT * FROM post WHERE ID='$i' ;";
$result = mysqli_query($conn,$sql);
$show_post = mysqli_fetch_assoc($result)
 ?>

<form action='articles_view.php?id=<?php echo $i;?>' method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo "pk_test_51I3kfnEGACHpuUm5LHK1YHqoV2SJ82D8NgaeIIJbacXke1yyWzpG0wOlGWHDKi7wxvx7QggyUtTPej0StzDCMuAv00UjbVnQHV"?>"
        data-amount="1000" data-name=" Writers Hub" data-description=" Payment" data-currency="usd" data-email=" ">
    </script>

</form>