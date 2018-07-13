<header>
    <div class="header">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Запомнить меня
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Вход</button>
                    <button class="btn btn-default">Авторизация</button>
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
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Введите имя</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Введите пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Вход/Регистрация</button>
                </form>
            </div>
        </div>
    </div>
<!--    modal-->
</header>