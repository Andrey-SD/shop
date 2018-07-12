<?php
//        $product = (include ROOT.'storage/products_list.php')[$_REQUEST['id']];
$product = (include ROOT.'storage/products_list.php')[1];
?>
<section>
    <div>
        <h1 class="product_name"><?php echo $product['name'];?></h1>

        <img src="/views/img/<?php echo $product['img'];?>" alt="фото">
        <p class="product_description"><?php echo $product['description'];?></p>
    </div>
</section>

</body>