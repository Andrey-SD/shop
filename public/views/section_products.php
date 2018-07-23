<section>
<?php
    use App\Auth;
    
    $auth = new Auth;
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
                            <button type="button" class="btn btn-primary" role="button" data-id="<?php echo $product['id'].'"';echo $auth->check() ? '':'disabled'; ?>
                            >В корзину</button>
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
    $(document).on("click", ".links-group>button", getBasket);
    $(document).ready(getBasket());
    function getBasket(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/basket',
            type: 'GET',
            data: {'id':id},
            success: function(basket){
                $('tr').remove();
                var basket = jQuery.parseJSON(basket);
                var summ = Number(0);
                basket.forEach(function(position, i, basket) {
                var str = '<tr><td><a href="/product?id='+position.id+'"><span>'+position.name+'</span></a></td><td><span> '+position.qty+'x </span></td><td><span> '+position.price+' грн</span></td></tr>';
                summ += position.price*position.qty;
                $('#basket-group table').append(str);
                });
                $('#basket-group table').append('<tr><td></td><td>Итого:</td><td>'+summ+'</td></tr>');
            }
        });
    };

</script>