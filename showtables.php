<?php
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
$atf =array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($atf, $row);
    }
}
foreach($atf as $row){
    //echo $row['nome'];
?>

<table class="table" style="margin-left: auto;
  margin-right: auto; text-align:center;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ciao</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $row['nome']?></td>
            <td><?php echo $row['nome']?></td>
            <td><?php echo $row['nome']?></td>
            <td><button>Ciao</button></td>
        </tr>
        <tr>
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
        </tr>
    </tbody>
</table>
<?php } ?>