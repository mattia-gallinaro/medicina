<?php
require_once('./connect.php');
$db = new Database();
$db_conn = $db->connect();

$_SESSION['user_id'] = 1;
$sql = sprintf("SELECT *
FROM utente u
inner join ruolo r on r.id = u.ruolo
WHERE u.id= %d", $_SESSION['user_id']);
$result = $db_conn->query($sql);
$final = $result->fetch_assoc();



?>

<div class="card mb-4" style="max-width:250px; position:relative;">
    <div class="card-body text-center">
        <h5 class="my-3"><?php echo $final['email']?></h5>
        <p class="text-muted mb-1"></p>
        <div class="d-flex justify-content-center mb-2">
            <form method="post" action="./logout.php">
                <button type="submit" name="ciao" class="btn btn-outline-primary">Logout</button>
            </form>
        </div>
    </div>
</div>