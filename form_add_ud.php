<?php
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();


if(isset($_POST['nome']) && isset($_POST['CFU']) && isset($_POST['settore']) && isset($_POST['lang'])){
    //$sql = sprintf(" INSERT INTO piano_di_studi (codice, nome, CFU, settore)
    //VALUES('%s', '%s', %d, '%s')
     //", $_POST['codice'], $_POST['nome'], $_POST['CFU'], $_POST['settore']);
     //$db_conn->query($sql);
     echo json_encode($_POST['lang']);
}

$sql = "SELECT *
    from piano_di_studi pds 
    where 1=1;";
$result = $db_conn->query($sql);
$atf_get_all =array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($atf_get_all, $row);
    }
}
unset($sql);

$sql  = "SELECT didattica
FROM formativa_didattica
WHERE 1=1";

$result_second = $db_conn->query($sql);
while ($row = $result_second->fetch_assoc()) {
    for($i = 0; $i < count($atf_get_all); $i++){
        if( $atf_get_all[$i]['codice'] == $row['didattica'] ){
            array_splice($atf_get_all, $i, 1);
            break;
        }
    }
}

?>

<div class="containe-fluid" style="background-color:#ffffff;">
    <form method="POST">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="codice"/>
                    <label class="form-label" for="form6Example1">Codice</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="nome"/>
                    <label class="form-label" for="form6Example2">nome</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="CFU"/>
            <label class="form-label" for="form6Example3">CFU</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="settore"/>
            <label class="form-label" for="form6Example4">Settore</label>
        </div>
        <div class="form-outline mb-4">
        <span>Seleziona in che attività formativa inserire l'uda</span> <br />
        <?php foreach($atf_get_all as $row){?>
        <input type="checkbox" class="check" name='lang[]' value="<?php echo $row['codice']?>">  <?php echo $row['codice'] . ' '. $row['nome']?><br/>
        <?php }?>
        </div>
        <button type="submit" class="btn btn-outline-dark btn-block mb-4">Crea attività didattica</button>
    </form>
</div>

<script type="text/javascript">
    $("input.check").on("change", function(){
        $("input.check").not(this).prop('checked', false);
    })        
</script>