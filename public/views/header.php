<header>
    <div class="header">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <form action="/login" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email"
                               name='email'
                               value="<?php echo 'andrey@andrey.com'.@$_POST['email'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name='password' placeholder="Пароль" value="123456">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Запомнить меня
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Вход</button>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-default">Авторизация</a>
                </form>
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
                <li data-toggle="modal" data-target="#exampleModalCenter"><a href="#">Логин</a></li>
                <li><a href="#">Корзина</a></li>
              </ul>
            </div>
      </div>
    </nav>
<!--    modal-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!--    modal-->
</header>