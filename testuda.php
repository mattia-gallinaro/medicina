<?php
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
                <th scope="col">Btn</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atf_get_all as $row) {
                //echo $row['nome'];?>
                <tr>
                    <td scope="row">
                        <?php echo $row['cod_at'] ?>
                    </td>
                    <td>
                        <?php echo $row['nome_at'] ?>
                    </td>
                    <td>
                        <?php echo $row['cod_ud'] ?>
                    </td>
                    <td>
                        <?php echo $row['nome_ud'] ?>
                    </td>
                    <td>
                        <?php echo $row['cfu_ud'] ?>
                    </td>
                    <td>
                        <?php echo $row['set_ud'] ?>
                    </td>
                    <td><form method="POST" action="./deleteAd.php"><button class="btn btn-outline-dark" name="test" value="<?php echo $row['cod_ud']?>">Delete</button></form></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>