<?php
// finito
require_once('./connect.php');
//echo $_SESSION['user_id']; 
if (isset($_POST['email']) && isset($_POST['password'])) {
  //echo ($_POST['email'] . $_POST['password']);
  $db = new Database();
  $db_conn = $db->connect();

  $sql = 'SELECT id, email, passwd 
  FROM utente
  WHERE 1=1';

  $result = $db_conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    if ($row['email'] == $_POST['email'] && $row['passwd'] == $_POST['password']) {
      $_SESSION['user_id'] = $row['id'];
      
      unset($sql);

      $sql = sprintf("SELECT r.descr
  FROM utente u
  INNER JOIN ruolo r on r.id = u.ruolo
  WHERE u.id = %d", $_SESSION['user_id']);

      $result = $db_conn->query($sql);
      $ar_resu = $result->fetch_assoc();
      $_SESSION['role_user'] = $ar_resu['descr'];
      header('Location: http://localhost/medicina/index.php?page=homepage');
    }
  }
  echo "<script>alert('Login errato');</script>";
}
?>
<div class="col-6 justify-content-center">
  <form class="justify-content-centers" method="POST" style="background-color: bisque; ">
    <h1 style="text-align:center;">Effettua il login</h1>
    <div class="form-outline mb-4">
      <label class="form-label" for="form2Example1">Email address</label>
      <input type="email" id="form2Example1" class="form-control" name="email"
        style="border-radius: 5px; border-width: 1px; border-color:black;" />
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form2Example2">Password</label>
      <input type="password" id="form2Example2" class="form-control" name="password"
        style="border-radius: 5px; border-width: 1px; border-color:black;" />
    </div>
    <button type="submit" class="btn btn-outline-dark btn-block mb-4" style="position:absolute;">Sign in</button>
  </form>
</div>