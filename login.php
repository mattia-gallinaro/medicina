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
      header('Location: http://localhost/medicina/index.php?page=homepage.php');
    }
  }

}
?>
<form method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-outline-dark btn-block mb-4" style="position:absolute;">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    </button>
  </div>
</form>