<?php
//finito
require "./connect.php";

$db = new Database();
$db_conn = $db->connect();
function get_Attivita_Form()
{
    global $db_conn;

}

$sql = "SELECT pds1.codice as cod_at , pds1.nome as nome_at ,pds.codice as cod_ud , pds.nome as nome_ud, pds.CFU as cfu_ud, pds.settore as set_ud
    from formativa_didattica fd
    inner join  piano_di_studi pds on pds.codice = fd.didattica
    inner join piano_di_studi pds1 on pds1.codice = fd.formativa
    where 1=1;";
$result = $db_conn->query($sql);
$atf_get_all = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($atf_get_all, $row);
    }
}


?>
<h1 style="text-align: center;">Attività formative</h1>
<div class="" style="max-height:100%; overflow:scroll;">
    <table class="table" style="margin-left: auto;
  margin-right: auto; text-align:center;">
        <thead>
            <tr>
                <th scope="col">Codice Attività</th>
                <th scope="col">Nome Attività</th>
                <th scope="col">Codice Unità</th>
                <th scope="col">Nome Unità</th>
                <th scope="col">CFU</th>
                <th scope="col">Settore</th>
                <th scope="col">Dissocia</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //$i = 0; 
            for($i = 0; $i < count($atf_get_all); $i++){
                //echo $row['nome'];?>
                <tr>
                    <?php if($i == 0 || $atf_get_all[$i]['cod_at'] != $atf_get_all[$i - 1]['cod_at']){?>
                    <td scope="row">
                        <?php echo $atf_get_all[$i]['cod_at']; ?>
                    </td>
                    <td>
                        <?php echo $atf_get_all[$i]['nome_at'];?>
                    </td>
                    <?php }
                    else{ ?>
                    <td scope="row"></td>
                    <td></td>
                    <?php }?>
                    <td>
                        <?php echo $atf_get_all[$i]['cod_ud']; ?>
                    </td>
                    <td>
                        <?php echo $atf_get_all[$i]['nome_ud']; ?>
                    </td>
                    <td>
                        <?php echo $atf_get_all[$i]['cfu_ud']; ?>
                    </td>
                    <td>
                        <?php echo $atf_get_all[$i]['set_ud']; ?>
                    </td>
                    <td><form method="POST" action="./removeConnUdaAf.php"><button class="btn btn-outline-dark" name="cod_ud" value="<?php echo $atf_get_all[$i]['cod_ud']?>"><i class='bx bx-unlink'></i></button></form></fd></td>
                    <td><form method="POST" action="./deleteUd.php"><button class="btn btn-outline-dark" name="test" value="<?php echo $atf_get_all[$i]['cod_ud']?>"><i class='bx bxs-trash-alt'></i></button></form></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>