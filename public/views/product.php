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
<?php include VIEWS.'header.php'; ?>
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

                        <div class="item">
                            <img src="/views/img/126.jpeg" alt="Chicago" style="width:100%;">

                        </div>

                        <div class="item">
                            <img src="/views/img/126.jpeg" alt="New York" style="width:100%;">

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
            <h1>Название</h1>
            <p>description</p>
            <div class="class-bottom">
                <span class="product_price">100</span>
                <button class="btn btn-primary">В корзину</button>
                <button class="btn btn-primary">Купить</button>
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
                <h3>Название</h3>
                <p>Описание.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Название</h3>
                <p>Характеристики</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Отзывы</h3>
                <p>Отзывы</p>
            </div>
        </div>
    </div>

</section>
</body>
</html>