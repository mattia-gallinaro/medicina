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

<div class="containe-fluid row justify-content-center" style="background-color:#ffffff;">
    <div class="col-3 text-center">
        <h1 style="text-align:center;">Crea uda</h1>
        <form method="POST" onsubmit="return validateForm();" action="./createUd.php">
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control campo_form" name="codice"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">Codice</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control campo_form" name="nome"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">nome</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control campo_form" name="CFU"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">CFU</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control campo_form" name="settore"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example4">Settore</label>
            </div>
            <div class="form-outline mb-4">
                <span>Seleziona in che attivit?? formativa inserire l'uda</span> <br />
                <select name="lang" style="width:100%; overflow:scroll; border-radius:5px;">
                    <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                        <option name="at_code" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice'] ?> - <?php echo $atf_get_all[$i]['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-dark btn-block mb-4">Crea attivit?? didattica</button>
        </form>
    </div>
    <div class="col-3 text-center">
        <h1 style="text-align:center;">Modifica uda</h1>
        <form method="POST" onsubmit="return validateForm();" action="./modifyUd.php" style="margin:auto;">
            <div class="form-outline mb-4">
                <span>Seleziona in che attivit?? formativa inserire l'uda</span> <br />
                <select name="fruit" id="listactvity" style="width:100%; overflow: hidden;">
                    <option value="" disabled selected>Scegli l'uda</option>
                    <?php for ($i = 0; $i < count($uda_all); $i++) { ?>
                        <option style="max-width:100%; overflow:scroll;" value="<?php echo $uda_all[$i]['codice'] ?>"><?php echo $uda_all[$i]['codice'] ?>
                            - <?php echo $uda_all[$i]['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="test30" class="form-control campo_form" name="nome_ud"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">nome</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="test31" class="form-control campo_form" name="CFU_ud"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">CFU</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="test32" class="form-control campo_form" name="settore_ud"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example4">Settore</label>
            </div>
            <button type="submit" class="btn btn-outline-dark btn-block mb-4">Modifica attivit?? didattica</button>
        </form>
    </div>
    <div class="col-3 text-center">
        <h1>Modifica Assegnazione Unit?? didattiche</h1>
        <form method="POST" action="./changeCol.php">
            <div class="form-outline mb-4">
                <span>Seleziona in che attivit?? formativa inserire l'uda</span><br />
                <select name="atfo" style="width:100%; overflow:scroll; border-radius:5px;">
                    <option value="" disabled selected>Scegli l'attivit?? formativa</option>
                    <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                        <option name="at_code" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice'] ?> - <?php echo $atf_get_all[$i]['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-4">
                <span>Seleziona in che attivit?? formativa inserire l'uda</span> <br />
                <select name="udfo" id="listactvity" style="width:100%; overflow: hidden;">
                    <option value="" disabled selected>Scegli l'uda</option>
                    <?php for ($i = 0; $i < count($uda_all); $i++) { ?>
                        <option style="max-width:100%; overflow:scroll;" value="<?php echo $uda_all[$i]['codice'] ?>"><?php echo $uda_all[$i]['codice'] ?>
                            - <?php echo $uda_all[$i]['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-dark btn-block mb-4">Cambia collegamento</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    /*$("input.check").on("change", function () {
        $("input.check").not(this).prop('checked', false);
    })*/
    let activities = null;
    let elements_list = document.querySelector("#listactvity");
    $(document).ready(function () {
        fetch("http://localhost/medicina/getArchiveUda.php")
            .then((response) => response.json())
            .then((data) => {
                //console.log(data);
                activities = data;
                elements_list.addEventListener("change", function () {
                    //alert(elements_list.options[elements_list.selectedIndex].value + activities[elements_list.selectedIndex - 1]['codice'] + activities[elements_list.selectedIndex - 1]['nome']);
                    $("#test30").val(activities[elements_list.selectedIndex - 1]['nome']);
                    $("#test31").val(activities[elements_list.selectedIndex - 1]['CFU']);
                    $("#test32").val(activities[elements_list.selectedIndex - 1]['settore']);
                });
            }
            );
        /*fetch("http://localhost/medicina/getArchiveActivity.php")
            .then((response) => response.json())
            .then((data) => {
                console.log(data);

            });*/
    }
    );

    function validateForm() {
        var input_box = document.getElementsByClassName();
        for (var i = 0; i < input_box.length; i++) {
            if (input_box[i].value == "" || input_box[i].value == null) {
                alert("Riempi i campi");
            }
        }
    }
</script>