<?php
include 'config.php';
const FILE = 'index';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
        .card-deck {
            margin-top: 20px
        }

        .card-body img {
            display: block;
            margin: 0 auto 15px;

        }

        .card-footer {
            background: transparent;
            border: 0;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Интернет-магазин Книжка</a>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        include 'inc/hmenu.inc.php';
        ?>

    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-md-3 col-sm-3 ">

            <h4>Категория</h4>

            <div class="row">
                <?php
                for ($i = 0; $i < count($categories); $i++) {
                    echo '<a class="dropdown-item" href="#">' . $categories[$i] . '</a>';
                }
                ?>
            </div>
            <hr>

            <h4>Цена</h4>

            <div class="row">
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">от</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default"> &nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default">&nbsp;

                    <button type="button" class="btn btn-success">Найти</button>
                </div>
            </div>
            <hr>
            <h4>Издательство</h4>

            <div class="row">
                <ul class="list-group col-md-12 col-sm-12">
                    <?php
                    for ($i = 0; $i < count($publisher); $i++) {
                        echo ' <li class="list-group-item">
                        <input type="checkbox" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">' . $publisher[$i] . '</label>
                    </li>';
                    }
                    ?>
                </ul>

            </div>
            <hr>


        </div>

        <div class="col-md-9 col-sm-9 ">
            <h1>Каталог</h1>
            <?php
            $k = 0;
            $i = 0;
            while ($k < count($books)) {
                echo '<div class="card-deck">';
                $k += 3;
                while ($i < $k) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<img src="http://placehold.it/150x220" alt="...">';
                    echo '<h3 class="card-title">' . $books[$i]["price"] . '</h3>';
                    echo '<p class="card-text"><small class="text-muted">Автор: ' . $books[$i]["author"] . '</small></p>';
                    echo '<p class="card-text">' . $books[$i]["description"] . '</small></p>';
                    echo '</div>';
                    echo ' <div class="card-footer"> <button type="button" class="btn btn-primary">В корзину</button> </div>';
                    echo '</div>';
                    $i++;
                }
                echo '</div>';
            }

            ?>
        </div>
    </div>


</div>


</div>

<div class="container">


</div><!-- /.container -->

<footer class="footer">
    <?php
    include 'inc/footer.inc.php';
    ?>


</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

