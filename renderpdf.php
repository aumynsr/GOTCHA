<?

use Mpdf\Mpdf;
header('Content-Type: application/pdf');
require_once __DIR__.'/vendor/autoload.php';
include('connect.php');
    $mpdf = new Mpdf();
    $id_po = $_GET['id_po'];
    $result = $dbcon->query("select * from purchase_order inner join dealer on dealer.id_dealer = purchase_order.id_dealer inner join users on purchase_order.id_user = users.id_cus where purchase_order.id_po = $id_po");
    $po = mysqli_fetch_assoc($result);

    $html = "";
    $html .= "<p style='width:100%; align:center'><h3>Purchase Order</h3></p>";
    $html .= "<p style='margin:50px 0px 0px 0px'>Purchase No. : ".$po['id_po']."</p>";
    $html .= "<p style='margin:0px'>Dealer Name : ".$po['name_dealer']."</p>";
    $html .= "<p style='margin:0px 0px 30px 0px'>Address : ".$po['address']."</p>";

    $html .= "<table style='border:0px solid back; border-bottom:1px solid back; width:100%; border-spacing: 0px 0px;'>";
        $html .= "<tr>";
            $html .= "<th style='border:1px solid back; width:20px;'>#</th>";
            $html .= "<th style='border-top:1px solid back; border-bottom:1px solid back;'>Items</th>";
            $html .= "<th style='border:1px solid back;  width:150px'>Amount</th>";
        $html .= "</tr>";
        $result = $dbcon->query("select * from purchase_list inner join product on product.id_pro = purchase_list.id_pro where id_po = $id_po");
        $i=0;
        while($product = mysqli_fetch_array($result)){
            $html .= "<tr>";
                $html .= "<th style='border-left:1px solid back; border-right:1px solid back;'>".($i+1)."</th>";
                $html .= "<td>".$product['name_pro']."</td>";
                $html .= "<th style='border-left:1px solid back; border-right:1px solid back;'>".$product['po_total']."</th>";
            $html .= "</tr>";
            $i++;
        }
        while($i <= 150){
            $html .= "<tr>";
                $html .= "<th style='border-left:1px solid back; border-right:1px solid back;'> </th>";
                $html .= "<td> </td>";
                $html .= "<th style='border-left:1px solid back; border-right:1px solid back;'> </th>";
            $html .= "</tr>";
            $i++;
        }
    $html .="</table>";

    $html .="<div style='margin-top:30px'>
        <div style='width:256px; text-align:center; float: right;'>
        Sender: ".$po['name_cus']."
        </div>
    </div>";

    $mpdf->SetWatermarkImage(
        'images/logo.jpg',
        0.5,
        '',
        array(140,20)
    );

    $mpdf->showWatermarkImage = true;
    $mpdf->WriteHTML($html);
    
    $mpdf->Output('filename.pdf','I');
    
?>