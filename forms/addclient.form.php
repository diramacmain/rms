<form id="addClientForm" action="./includes/addcustomer.inc.php" method="POST">
  <div class="form-group">
      <h3>Add Client <i class="material-icons">add_circle_outline</i></h3>
      <input type="text" class="form-contol" name="name" placeholder="Name:" required />
      <input type="text" class="form-contol" name="surname" placeholder="Surname:" required/>
      <input type="text" class="form-contol" name="mobile" placeholder="Mobile:" required/>
      <input type="text" class="form-contol" name="idNumber" placeholder="ID Number:" />
      <button type="submit" class="form-contol btn btn-primary" name="submit" value="submit">Add</button>
  </div>
</form>