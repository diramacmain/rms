<form class="col-sm-12" id="searchClientForm" action="./includes/searchn.inc.php" method="post">
  <div class="form-group">
      <h3>Mobile Number:<i class="material-icons">add_circle_outline</i></h3>
      <input type="text" class="form-contol num09" name="mobile" maxlength="10"  placeholder="Cell Number:" required />
      <button type="submit" class="form-contol btn btn-primary" name="searchn" value="searchn">search</button>
  </div>
</form>
<?php
if($_GET['success']="userfound"){
    $success = $_GET['success'];
    if($success == "userfound")
    {   
        if(isset($_GET['n'])){
            $n = $_GET['n'];
            $s = $_GET['s'];
            $m = $_GET['m'];
            $i = $_GET['i'];
            $c = $_GET['c'];
            require "userfoundtable.form.php";
            $_GET['success'] = "";
        }
    }
}
?>

