<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Продукт</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/views/style/main.css" type="text/css">
    <link rel="stylesheet" href="/views/style/header.css" type="text/css">
    <link rel="stylesheet" href="/views/style/product.css">
</head>
<body>
<?php
    use Src\Auth;
    
    $auth = new Auth;
    include VIEWS.'header.php'; ?>
<section>
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-md-6">
            <div class="container cont_carousel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="/views/img/126.jpeg" alt="Los Angeles" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-6 col-md-6 parent-bottom">
            <h1><?php echo $product['name']; ?></h1>
            <p><?php echo $product['description']; ?></p>
            <div class="class-bottom">
                <span class="product_price"><?php echo $product['price']; ?></span>
                <p class="links-group">
                    <button type="button" class="btn btn-primary" role="button" data-id="<?php echo $product['id'].'"';echo $auth->check() ? '':'disabled'; ?>
                        >В корзину</button>
                    <a href="<?php echo '/product?id='.$product['id'];?>" class="btn btn-default " role="button">Подробнее</a>
                </p>
            </div>
        </div>
    </div>
    <div class="nav-div">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Описание</a></li>
            <li><a data-toggle="tab" href="#menu1">Характеристики</a></li>
            <li><a data-toggle="tab" href="#menu2">Отзывы</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?>.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3><?php echo $product['name']; ?></h3>
                <p>Характеристики</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Отзывы</h3>
                <p>Отзывы</p>
            </div>
        </div>
    </div>
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
                console.log(typeof(summ));
                $('#basket-group table').append(str);
                });
                $('#basket-group table').append('<tr><td></td><td>Итого:</td><td>'+summ+'</td></tr>');
            }
        });
    };
</script>
</body>
</html>