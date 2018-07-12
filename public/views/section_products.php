<section>
<?php
    $products = require ROOT.'storage/products_list.php';
    $inc = 0;
    foreach($products as $product){
        if($inc%4==0){
            echo '<div class="row product_row">';
        };

?>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img src="/views/img/126.jpeg" alt="photo">
                    <div class="caption">
                        <h3><?php echo $product['name'];?></h3>
                        <p><?php echo $product['description'];?></p>
                        <p class="product_price"><?php echo $product['price'];?></p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Купить</a>
                            <a href="<?php echo '/product?id='.$product['id'];?>" class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
<?php
        if ($inc%4==3){echo '</div>';};
        $inc++;
    }
?>
</section>
