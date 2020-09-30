<form class="col-sm-12" id="addReqForm" action="./includes/addrequest.inc.php" method="POST">
  <div class="form-group">
      <h3>Loan Amount</h3>
      <input maxlength="20" type="text" class="form-contol" name="name" value="<?php if(isset($n)){echo $n;};?>" placeholder="Name:" readonly required/>
      <input maxlength="20" type="text" class="form-contol" name="surname" value="<?php if(isset($s)){echo $s;};?>" placeholder="Surname:" readonl required/>
      <input maxlength="10" type="text" class="form-contol num09" name="mobile" value="<?php if(isset($m)){echo $m;};?>" placeholder="Mobile:" readonly/>
      <input type="text" number class="form-contol num09" name="amount" placeholder="laon amount:" required/>
      <input type="hidden" class="form-contol" name="cid" value="<?php if(isset($c)){echo $c;};?>"/>
      <select style="width:150px;" name="loantype" id="loantype" class="" required>
      <option ></option>
        <option value="1">1 month loan</option>
        <option value="2">3 Months Loan</option>
        <option value="2">10 Day Loan</option>
      </select>
      <button type="submit" class="form-contol btn btn-primary" name="submit" value="submit">Add</button>
  </div>
</form>