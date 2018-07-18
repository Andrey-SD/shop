<?php
    use App\Auth;
?>
<header>
    <div class="header">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7">

            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <?php
                    if (Auth::check()){
                        $name = Auth::check()['name'];
                        echo "
                            <div class='auth-check'>
                                <p class='user-name'>$name</p>
                                <a href='#'><img src='/views/img/basket.svg' alt=''></a>
                                <a href='logout'><img src='/views/img/logout.svg' alt=''></a>
                            </div>
                            
                        ";
                    } else {

                        echo'
                            <div class=\'auth-check\'>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalRegister">Регистрация</button>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalLogin">Авторизация</button>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>

    </div>
    <nav class="navbar navbar-default">
       <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Продукты</a></li>
              </ul>
            </div>
      </div>
    </nav>
<!--    login modal-->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="/login" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите Email</label>
                        <input type="text" name='email'
                               class="form-control" aria-describedby="emailHelp"
                               placeholder="Email" value="andrey@andrey.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Введите пароль</label>
                        <input type="password" name='password'
                               class="form-control"
                               placeholder="Пароль" value="123456">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Запомнить меня
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Авторизироваться</button>
                </form>
            </div>
        </div>
    </div>

<!--    login modal end-->
<!--   register modal-->
    <div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="/register" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Введите имя</label>
                    <input type="text" name='name'
                           class="form-control" aria-describedby="emailHelp"
                           placeholder="Имя" value="andrey">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите Email</label>
                        <input type="email" name='email'
                               class="form-control" aria-describedby="emailHelp"
                               placeholder="Email" value="andrey@andrey.com">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Введите пароль</label>
                    <input type="password" name='password'
                           class="form-control"
                           placeholder="Пароль" value="123456">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Повторите пароль</label>
                        <input type="password" name="re_password"
                               class="form-control"
                               placeholder="Повторите пароль" value="123456">
                    </div>
                  <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
<!--   register modal end-->
</header>