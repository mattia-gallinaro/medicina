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


unset($sql);

$sql = "SELECT *
    from formativa_didattica fd
    inner join piano_di_studi pds on pds.codice = fd.didattica
    where 1=1;";
$result = $db_conn->query($sql);
$uda_all = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($uda_all, $row);
    }
}

?>

<div class="containe-fluid" style="background-color:#ffffff;">
    <form method="POST" onsubmit="return validateForm();" action="./createUd.php">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control campo_form" name="codice" />
                    <label class="form-label" for="form6Example1">Codice</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control campo_form" name="nome" />
                    <label class="form-label" for="form6Example2">nome</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control campo_form" name="CFU" />
            <label class="form-label" for="form6Example3">CFU</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control campo_form" name="settore" />
            <label class="form-label" for="form6Example4">Settore</label>
        </div>
        <div class="form-outline mb-4">
            <span>Seleziona in che attività formativa inserire l'uda</span> <br />
            <select name="lang">
                <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                    <option name="at_code" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice'] ?> - <?php echo $atf_get_all[$i]['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-dark btn-block mb-4">Crea attività didattica</button>
    </form>

    <form method="POST" onsubmit="return validateForm();" action="./modifyUd.php">
        <div class="form-outline mb-4">
            <span>Seleziona in che attività formativa inserire l'uda</span> <br />
            <select name="cod_ut">
                <?php for ($i = 0; $i < count($uda_all); $i++) { ?>
                    <option name="ut_code" value="<?php echo $uda_all[$i]['codice'] ?>"><?php echo $uda_all[$i]['codice'] ?>
                        - <?php echo $uda_all[$i]['nome'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example1" class="form-control campo_form" name="codice_ud" />
                    <label class="form-label" for="form6Example1">Codice</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control campo_form" name="nome_ud" />
                    <label class="form-label" for="form6Example2">nome</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control campo_form" name="CFU_ud" />
            <label class="form-label" for="form6Example3">CFU</label>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control campo_form" name="settore_ud" />
            <label class="form-label" for="form6Example4">Settore</label>
        </div>
        <button type="submit" class="btn btn-outline-dark btn-block mb-4">Modifica attività didattica</button>
    </form>
</div>

<script type="text/javascript">
    $("input.check").on("change", function () {
        $("input.check").not(this).prop('checked', false);
    })


    function validateForm() {
        var input_box = document.getElementsByClassName();
        for (var i = 0; i < input_box.length; i++) {
            if (input_box[i].value == "" || input_box[i].value == null) {
                alert("Riempi i campi");
            }
        }
    }
</script>