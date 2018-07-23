<section>
<?php
    $inc = 0;
    foreach($products as $product){
        if($inc%4==0){
            echo '<div class="row product_row">';
        };
?>
            <div class="col-sm-6 col-md-3 col-lg-3" >
                <div class="thumbnail">
                    <img src="/views/img/126.jpeg" alt="photo">
                    <div class="caption">
                        <h3><?php echo $product['name'];?></h3>
                        <p><?php echo $product['description'];?></p>
                        <p class="product_price"><?php echo $product['price'];?></p>
                        <p class="links-group">
                            <a href="#" class="btn btn-primary" role="button" data-id="<?php echo $product['id'];?>">В корзину</a>
                            <a href="<?php echo '/product?id='.$product['id'];?>" class="btn btn-default " role="button">Подробнее</a>
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
    
<script>
    
    $(document).ready(function(){
        $(".links-group>a:first-child").click(function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/basket',
                type: 'GET',
                data: {'id':id},
                success: function(basket){
                    $('tr').remove();
                    var basket = jQuery.parseJSON(basket);
                    console.log(basket);
                        basket.forEach(function(position, i, basket) {
                        var str = '<tr><td><a href="/product?id='+position.id+'"><span>'+position.name+'</span></a></td><td><span> '+position.qty+'x </span></td><td><span> '+position.price+' грн</span></td></tr>';
                        $('#basket-group table').append(str);
                    });
                }
            });
        });
        
    });

</script>