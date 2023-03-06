<?php
require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();

if(isset($_POST['nome']) && isset($_POST['CFU']) && isset($_POST['settore'])){
    $sql = sprintf(" INSERT INTO piano_di_studi (codice, nome, CFU, settore)
    VALUES('%s', '%s', %d, '%s')
     ", $_POST['codice'], $_POST['nome'], $_POST['CFU'], $_POST['settore']);
     $db_conn->query($sql);
}
?>

<div class="containe-fluid" style="background-color:#ffffff;">
    <form method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
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

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" name="CFU"/>
            <label class="form-label" for="form6Example3">CFU</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="settore"/>
            <label class="form-label" for="form6Example4">Settore</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Crea attività didattica</button>
    </form>
</div>