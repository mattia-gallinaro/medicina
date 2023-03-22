<?php
require_once('./connect.php');

$sql = "SELECT u.id, u.email, r.descr
FROM utente u 
INNER JOIN ruolo r on r.id = u.ruolo 
WHERE 1=1";

$db = new Database();
$db_conn = $db->connect();

$result = $db_conn->query($sql);


$atf_get_all = array();
while($row = $result->fetch_assoc()) {
    array_push($atf_get_all, $row);
}


?>
<h1 style="text-align: center;">Utenti</h1>
<div class="" style="max-height:100%; overflow:scroll;">
    <table class="table" style="margin-left: auto;
  margin-right: auto; text-align:center;">
        <thead>
            <tr>
                <th scope="col">Codice</th>
                <th scope="col">Email</th>
                <th scope="col">Ruolo</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atf_get_all as $row) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $row['id'] ?>
                    </th>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['descr'] ?>
                    </td>
                    <td><form method="POST" action="./deleteUser.php"><button class="btn btn-outline-dark" name="test" value="<?php echo $row['id']?>">Delete</button></form></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>