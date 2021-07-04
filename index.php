<?
include __DIR__ . "/database/db.php";
include "CProducts.php";
include __DIR__ . "/template/header.php";
$products = new CProducts();
$res = $products->getProducts(2,$mysqli);
?>
<table>
<caption>Перечень продуктов</caption>
<tr><th>Название</th><th>Цена</th><th>Артикул</th><th>Количество</th><th>Дата</th></tr>
<?
while ($data = mysqli_fetch_assoc($res)){
    ?>
    <tr><td class="name"><? echo $data['PRODUCT_NAME']; ?></td><td> <? echo $data['PRODUCT_PRICE']; ?></td><td class="article"><? echo $data['PRODUCT_ARTICLE']; ?></td><td><span class="quantity"><? echo $data['PRODUCT_QUANTITY']; ?></span><button class="btn btn-minus">-</button><button class="btn btn-plus">+</button></td><td><? echo $data['DATE_CREATE']; ?></td><td><button class="btn btn-visible">Скрыть</button></td></tr>
    <?
}
?>
</table>   
<? include  __DIR__ . "/template/footer.php"; ?>