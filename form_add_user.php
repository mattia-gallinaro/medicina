<?php
//finito

require_once('./connect.php');

$db = new Database();
$db_conn = $db->connect();


$sql = "SELECT u.id, u.email, r.descr
FROM utente u 
INNER JOIN ruolo r on r.id = u.ruolo 
WHERE 1=1";

$result = $db_conn->query($sql);


$atf_get_all = array();
while ($row = $result->fetch_assoc()) {
    array_push($atf_get_all, $row);
}

unset($sql);

$sql = "SELECT *
FROM ruolo
WHERE 1=1";

$result = $db_conn->query($sql);

$role_get_all = array();
while ($row = $result->fetch_assoc()) {
    array_push($role_get_all, $row);
}
?>

<div class="containe-fluid row justify-content-center" style="background-color:#ffffff;">
    <div class="hidden-md col-1"></div>
    <div class="col-sm-12 col-md-6 col-lg-4 text-center">
        <h2 style="text-align:center;">Crea un nuovo utente</h2><br />
        <form method="POST" action="./createUser.php">
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control campo_form" name="email"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">Email</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control campo_form" name="password"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">Password</label>
            </div>
            <div class="form-outline mb-4">
                <select id="listactvity" name="role" style="width:100%; overflow:scroll; border-radius:5px;">
                    <option value="0" disabled selected>Seleziona il ruolo</option>
                    <?php for ($i = 0; $i < count($role_get_all); $i++) { ?>
                        <option style="max-width:100%;" value="<?php echo $role_get_all[$i]['id'] ?>"><?php echo $role_get_all[$i]['descr'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Crea attività didattica</button>
        </form>
    </div>
    <div class="hidden-md col-1"></div>
    <div class="col-sm-12 col-md-6 col-lg-4 text-center">
        <form method="post" action="./modifyAt.php">
            <div class="form-outline mb-4">
                <h2 style="text-align:center;">Seleziona l'utente da modificare</h2><br />
                <select id="listusers" name="usermod" style="width:100%; overflow:scroll; border-radius:5px;">
                    <option value="0" disabled selected>Seleziona l'utente</option>
                    <?php for ($i = 0; $i < count($atf_get_all); $i++) { ?>
                        <option style="max-width:100%;" value="<?php echo $atf_get_all[$i]['id'] ?>"><?php echo $atf_get_all[$i]['id'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-outline mb-2">
                <input type="text" id="test30" id="form6Example3" class="form-control" name="nome_at"
                    style="border-width:1px; border-color:black;" />
                <label class="form-label" for="form6Example3">
                    <p>Email</p>
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Modifica utente</button>
        </form>
    </div>
    <div class="hidden-md col-1"></div>
</div>

<script type="text/javascript">
    let activities = null;
    let elements_list = document.querySelector("#listusers");
    $(document).ready(function () {
        fetch("http://localhost/medicina/getArchiveUser.php")
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                activities = data;
                elements_list.addEventListener("change", function () {
                    //alert(elements_list.options[elements_list.selectedIndex].value + activities[elements_list.selectedIndex - 1]['codice'] + activities[elements_list.selectedIndex - 1]['nome']);
                    $("#test30").val(activities[elements_list.selectedIndex - 1]['email']);
                });
            });


        /*change(function(){
            alert(element_list.options[element_list.selectedIndex].value);
        });*/
    });
</script>