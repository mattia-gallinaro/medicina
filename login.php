<?php
require_once('./connect.php');
//echo $_SESSION['user_id']; 
if (isset($_POST['email']) || isset($_POST['password'])) {
  echo ($_POST['email'] . $_POST['password']);
  $db = new Database();
  $db_conn = $db->connect();

  $sql = 'SELECT id, email, passwd 
  FROM utente
  WHERE 1=1';

  $result = $db_conn->query($sql);
  while($row = $result->fetch_assoc()){
    if($row['email'] == $_POST['email'] && $row['passwd'] == $_POST['password']){
      $_SESSION['user_id'] = $row['id'];
      header('Location: http://localhost/medicina/index.php?page=homepage');
    }
  }

}
?>
<form method="POST">
  <h1 style="text-align:center;">Effettua il login</h1>
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <button type="submit" class="btn btn-outline-dark btn-block mb-4" style="position:absolute;">Sign in</button>
</form>