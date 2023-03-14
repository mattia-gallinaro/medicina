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

<div class="containe-fluid row justify-content-center" style="background-color:#ffffff;">
    <div class="col-4 text-center">
        <h2 style="text-align:center;">Crea un'attivitá</h2><br />
        <form method="POST" action="./createAf.php">
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
            <button type="submit" class="btn btn-primary btn-block mb-4">Crea attività didattica</button>
        </form>
    </div>
    <div class="col-1"></div>
    <div class="col-4 text-center">
        <form method="post" action="./modifyAt.php">
            <div class="form-outline mb-4">
                <h2 style="text-align:center;">Seleziona l'attivitá da modificare</h2><br />
                <select id="listactvity" name="fruit" style="width:100%; overflow:scroll; border-radius:5px;">
                    <option value="" disabled selected>Seleziona l'attivitá</option>
                    <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                        <option style="max-width:100%;" value="<?php echo $atf_get_all[$i]['codice'] ?>"><?php echo $atf_get_all[$i]['codice']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-2">
                <input type="text" id="test30" id="form6Example3" class="form-control" name="nome_at"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">
                    <p>Nome</p>
                </label>
            </div>
            <div class="form-outline mb-2">
                <input type="text" id="test31" class="form-control" name="CFU_at"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">
                    <p>CFU</p>
                </label>
            </div>
            <div class="form-outline mb-2">
                <input type="text" id="test32" class="form-control" name="settore_at"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" id="test34" for="form6Example4">
                    <p>Settore</p>
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Modifica attività
                didattica</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    let activities = null;
    let elements_list = document.querySelector("#listactvity");
    $(document).ready(function () {
        fetch("http://localhost/medicina/getArchiveActivity.php")
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                activities = data;
                elements_list.addEventListener("change", function () {
                    //alert(elements_list.options[elements_list.selectedIndex].value + activities[elements_list.selectedIndex - 1]['codice'] + activities[elements_list.selectedIndex - 1]['nome']);
                    $("#test30").val(activities[elements_list.selectedIndex - 1]['nome']);
                    $("#test31").val(activities[elements_list.selectedIndex - 1]['CFU']);
                    $("#test32").val(activities[elements_list.selectedIndex - 1]['settore']);
                });
            });


        /*change(function(){
            alert(element_list.options[element_list.selectedIndex].value);
        });*/
    });
</script>