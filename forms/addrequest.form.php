<form class="col-sm-12" id="addClientForm" action="./includes/addrequeset.inc.php" method="POST">
  <div class="form-group">
      <h3>Add Client <i class="material-icons">add_circle_outline</i></h3>
      <input maxlength="20" type="text" class="form-contol" name="name" value="" placeholder="Name:" disabled />
      <input maxlength="20" type="text" class="form-contol" name="surname" value="" placeholder="Surname:" disabled/>
      <input maxlength="10" type="text" class="form-contol num09" name="mobile" value="" placeholder="Mobile:" disabled/>
      <input type="text" number class="form-contol" name="amount" placeholder="laon amount:"/>
      <button type="submit" class="form-contol btn btn-primary" name="submit" value="submit">Add</button>
  </div>
</form>