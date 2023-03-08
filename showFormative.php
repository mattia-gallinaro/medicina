<?php
require "./connect.php";

$db = new Database();
$db_conn = $db->connect();
function get_Attivita_Form()
{
    global $db_conn;

}

$sql = "SELECT *
    from formativa_didattica fd
    inner join piano_di_studi pds on pds.codice = fd.didattica
    where 1=1;";
$result = $db_conn->query($sql);
$atf_get_all =array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($atf_get_all, $row);
    }
}

?>
<h1 style = "text-align: center">Unitá didattiche</h1>
<div class="table-responsive" style="max-height:50%; overflow:scroll;">
<table class="table" style="margin-left: auto;
  margin-right: auto; text-align:center;">
    <thead>
        <tr>
            <th scope="col">Codice</th>
            <th scope="col">Nome</th>
            <th scope="col">CFU</th>
            <th scope="col">Settore</th>
            <th scope="col">Btn</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($atf_get_all as $row){
    //echo $row['nome'];?>
        <tr>
            <th scope="row"><?php echo $row['codice']?></th>
            <td><?php echo $row['nome']?></td>
            <td><?php echo $row['CFU']?></td>
            <td><?php echo $row['settore']?></td>
            <td><button>Modifica</button></td>
        </tr>
        <!--<tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>-->
        <?php } ?>
    </tbody>
</table>
</div>