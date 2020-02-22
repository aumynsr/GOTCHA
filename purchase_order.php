<?
    session_start();
    $check_prod = $_POST["check_prod"];
    $numbe_prod = $_POST["prod_query"];
    $id_dealer = $_POST["dealer"];
    $id_admin = $_SESSION["id_cus"];

    include("connect.php");
    $dbcon->query("insert into purchase_order (id_dealer, id_user) values ($id_dealer, $id_admin)");
    $purchase_id=$dbcon->insert_id;

    for($i=0; $i<count($check_prod); $i++) {
        $dbcon->query("insert into purchase_list (id_pro, id_po, po_total) values ($check_prod[$i], $purchase_id, $numbe_prod[$i])");
    }

    Header("location:renderpdf.php?id_po=$purchase_id");
?>