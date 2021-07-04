<?
Class CProducts{

    public function getProducts($quantity,$mysqli){
        $sql = "SELECT * FROM products WHERE `VISABLE` <> 'NO' ORDER BY `DATE_CREATE` DESC  LIMIT 0,$quantity";
        $res = mysqli_query($mysqli, $sql);
        return $res;
    }
    public function visible($article,$mysqli){
        $sql = "UPDATE products SET VISABLE = 'NO' WHERE PRODUCT_ARTICLE = '$article'";
        $res = mysqli_query($mysqli, $sql);
    }
    public function quantity($quantity,$name,$mysqli){
        $sql = "UPDATE products SET	PRODUCT_QUANTITY = $quantity WHERE 	PRODUCT_NAME = '$name'";
        $res = mysqli_query($mysqli, $sql);
    }
}
?>