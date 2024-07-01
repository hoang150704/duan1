<?php
include "model/pdo.php";
include "model/category.php";
// Các biến dùng trong tất cả các trang
$listCategory = loadAllCategory();
// Header

// Router
if(isset($_GET['act'])&&($_GET['act']!="")){
    include "view/header.php";
    $act=$_GET['act'];
    switch($act){
        case "shop_category":
            include "view/shop_category.php";
        break;

    }
}else{  include "view/header.php";

        include "view/home.php";
    }

include "view/footer.php";

?>