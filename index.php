<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>БумерСтор</title>
</head>
<body style="background-color: #a6b3bf">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Панель навигации</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ссылка</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Выпадающий список
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Действие</a></li>
                        <li><a class="dropdown-item" href="#">Другое действие</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Отключенная</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>
<br>
<div class="card" style="width: 18rem;">
    <img src="https://api.meet-market.ru/images/2194390.jpg?q=100&h=2000&w=2000" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">1 Retro High J Balvin (2020)</h5>
        <p class="card-text"> Air Jordan 1 High J Balvin имеет многослойный холщовый верх цвета тай-дай с зазубренными краями, открывающими сплошные черные кожаные заплаты.</p>
        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="https://api.meet-market.ru/images/2194390.jpg?q=100&h=2000&w=2000" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">1 Retro High J Balvin (2020)</h5>
        <p class="card-text"> Air Jordan 1 High J Balvin имеет многослойный холщовый верх цвета тай-дай с зазубренными краями, открывающими сплошные черные кожаные заплаты.</p>
        <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
    </div>
</div>


<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="product-card">
                            <div class="offer">
                                <?php if ($product['hit']): ?>
                                    <div class="offer-hit">Hit</div>
                                <?php endif; ?>
                                <?php if ($product['sale']): ?>
                                    <div class="offer-sale">Sale</div>
                                <?php endif; ?>
                            </div>
                            <div class="card-thumb">
                                <a href="#"><img src="<?= $product['img'] ?> " width="200" alt="<?= $product['title'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href=""><?= $product['title'] ?></a>
                                    <p><?= $product['content'] ?></p>
                                </div>

                                <div class="card-price text-center">
                                    <?php if ($product['oldprice']): ?>
                                        <del><?= $product['oldprice'] ?> руб.</del>
                                    <?php endif; ?>
                                    <?= $product['price'] ?> руб.
                                </div>
                                <a href="out.php?id=<?= $product['id'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id'] ?>">
                                    <i class="fas fa-cart-arrow-down">  </i>  Подробнее
                                </a>

                            </div>
                        </div><!-- /product-card -->

                    <?php endforeach; ?>
                <?php endif; ?>

            </div><!-- /product-cards -->

        </div><!-- /row -->

    </div><!-- /container -->
</div><!-- /wrapper -->

<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>
</html>