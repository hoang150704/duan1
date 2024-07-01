<?php
$table = "category";
$status = 1;
function loadAllCategory(){
    global $table;
    $sql = "SELECT * FROM $table ORDER BY category_id DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
}

?>
