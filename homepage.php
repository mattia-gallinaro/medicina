<?php
//finito
require_once('./connect.php');
$db = new Database();
$db_conn = $db->connect();

$sql = sprintf("SELECT *
FROM utente u
inner join ruolo r on r.id = u.ruolo
WHERE u.id= %d", $_SESSION['user_id']);
$result = $db_conn->query($sql);

$final = $result->fetch_assoc();

?>
<div class="col-12 row justify-content-center">
    <div class="card mb-4" style="max-width:250px; position:relative; margin-top: 10vh;">
        <div class="card-body text-center">
            <h5 class="my-3">
                <?php echo $final['email'] ?>
            </h5>
            <p class="text-muted mb-1"></p>
            <div class="d-flex justify-content-center mb-2">
                <form method="post" action="./logout.php">
                    <button type="submit" name="ciao" class="btn btn-outline-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>