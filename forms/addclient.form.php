<form class="col-sm-12" id="addClientForm" action="./includes/addcustomer.inc.php" method="POST">
  <div class="form-group">
      <h3>Add Client <i class="material-icons">add_circle_outline</i></h3>
      <input maxlength="20" type="text" class="form-contol" name="name" placeholder="Name:" required />
      <input maxlength="20" type="text" class="form-contol" name="surname" placeholder="Surname:" required/>
      <input maxlength="10" type="text" class="form-contol num09" name="mobile" placeholder="Mobile:" required/>
      <input maxlength="13" type="text" class="form-contol num09" name="idNumber" placeholder="ID Number:" />
      <button type="submit" class="form-contol btn btn-primary" name="submit" value="submit">Add</button>
  </div>
</form>