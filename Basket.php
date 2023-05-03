<?php
?>

<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEERMAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="product_style.css">
</head>

<body>
<div class="modal-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Картинка</th>
                <th scope="col">Название</th>
                <th scope="col">Цена</th>
                <th scope="col">Количество</th>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td><a href="#"><img src="" alt=""></a></td>
                    <td><a href="#"></a></td>
                    <td></td>
                    <td></td>
                </tr>


            <tr>
                <td colspan="4" align="right">Товаров: <span id="modal-cart-qty"></span>
                    <br> Сумма:  рублей
                </td>
            </tr>
            </tbody>
        </table>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="button" class="btn btn-primary">Оформить заказ</button>
        <button type="button" class="btn btn-danger" id="clear-cart">Очистить корзину</button>

</div>
</body>
</html>
