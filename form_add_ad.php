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
    <form method="POST" action="./createAf.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="codice" />
                    <label class="form-label" for="form6Example1">Codice</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="nome" />
                    <label class="form-label" for="form6Example2">nome</label>
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="CFU" />
            <label class="form-label" for="form6Example3">CFU</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="settore" />
            <label class="form-label" for="form6Example4">Settore</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Crea attività didattica</button>
    </form>

    <form method="POST" action="./modifyAt.php">
        <div class="form-outline mb-4">
            <select name="codice_at">
                <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                    <option name="at_code" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice'] ?> - <?php echo $atf_get_all[$i]['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control" name="codice_at" />
                    <label class="form-label" for="form6Example1">Codice</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" name="nome_at" />
                    <label class="form-label" for="form6Example2">nome</label>
                </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="CFU_at"/>
            <label class="form-label" for="form6Example3">CFU</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="settore_at"/>
            <label class="form-label" for="form6Example4">Settore</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Modifica attività didattica</button>
    </form>
</div>