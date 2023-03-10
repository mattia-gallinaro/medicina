<?php
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();


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


?>

<div class="containe-fluid" style="background-color:#ffffff;">
    <h1 style="text-align:center;">Crea un'attivitá</h1><br />
    <form method="POST" action="./createAf.php">
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control campo_form" name="codice" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example3">Codice</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control campo_form" name="nome" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example3">nome</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control campo_form" name="CFU" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example3">CFU</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control campo_form" name="settore" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example4">Settore</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Crea attività didattica</button>
    </form>

    <form method="post" action="./modifyAt.php">
        <div class="form-outline mb-4">
            <h1 style="text-align:center;">Seleziona l'attivitá da modificare</h1><br />
            <select name="fruit" style="max-width:100%; overflow:scroll;">
                <option value="" disabled selected>Seleziona l'attivitá</option>
                <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                    <option style="max-width:100%;" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice'] ?> - <?php echo $atf_get_all[$i]['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="nome_at" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example3">Nome</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="CFU_at" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example3">CFU</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="settore_at" style="border-width:2px; border-color:black;"/>
            <label class="form-label" for="form6Example4">Settore</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Modifica attività didattica</button>
    </form>
</div>