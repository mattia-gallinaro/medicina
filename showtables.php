<?php
//finito
require "./connect.php";

$db = new Database();
$db_conn = $db->connect();
function get_Attivita_Form()
{
    global $db_conn;

}

$sql = "SELECT *
    from piano_di_studi pds 
    where 1=1;";
$result = $db_conn->query($sql);
$atf_get_all = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($atf_get_all, $row);
    }
}
unset($sql);

$sql = "SELECT didattica
FROM formativa_didattica
WHERE 1=1";

$result_second = $db_conn->query($sql);
while ($row = $result_second->fetch_assoc()) {
    for ($i = 0; $i < count($atf_get_all); $i++) {
        if ($atf_get_all[$i]['codice'] == $row['didattica']) {
            array_splice($atf_get_all, $i, 1);
            break;
        }
    }
}

//echo count($atf_get_all);

?>
<h1 style="text-align: center;">Attività formative</h1>
<div class="" style="max-height:100%; overflow:scroll;">
    <table class="table" style="margin-left: auto;
  margin-right: auto; text-align:center;">
        <thead>
            <tr>
                <th scope="col">Codice</th>
                <th scope="col">Nome</th>
                <th scope="col">CFU</th>
                <th scope="col">Settore</th>
                <?php if($_SESSION['role_user'] == 'admin'){ ?>
                <th scope="col">Cancella</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atf_get_all as $row) {
                //echo $row['nome'];?>
                <tr>
                    <th scope="row">
                        <?php echo $row['codice'] ?>
                    </th>
                    <td>
                        <?php echo $row['nome'] ?>
                    </td>
                    <td>
                        <?php echo $row['CFU'] ?>
                    </td>
                    <td>
                        <?php echo $row['settore'] ?>
                    </td>
                    <?php if($_SESSION['role_user'] == 'admin'){ ?>
                    <td><form method="POST" action="./deleteAd.php"><button class="btn btn-outline-dark" name="test" value="<?php echo $row['codice']?>">Delete</button></form></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>