<?php
$reqID = $_GET['R'];
$name = $_GET['N'];
$ExpectedAmount = $_GET['XA'];
$totalPaid = $_GET['TP'];
$cID = $_GET['cID'];
$balance = $ExpectedAmount - $totalPaid;
?>

<div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-primary">
                  <h4 class="card-title ">Make a loan Payment</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="./includes/makepayment.inc.php" method="post">
                    <table class="table editPageTable">
                      <thead class=" text-primary">
                        <th>ReqId</th>
                        <th>Client Name</th>
                        <th>Expected Payment</th>
                        <th>Balance</th>
                        <th>Payment</th>
                      </thead>
                      <tbody>
                        <tr>
                        <td><input type="text" name="reqID" value="<?php echo $reqID;?>"  readonly required></td>
                        <td><input type="text" name="name" value="<?php echo $name;?>" readonly required></td>
                        <td><input type="text" name="ExpAmount" value="<?php echo $ExpectedAmount;?>" readonly required></td>
                        <td><input type="text" name="balance" value="<?php echo $balance;?>" readonly ></td>
                        <td><input type="number" step="0.01" name="payment" class="" required></td>
                        </tr>
                      </tbody>
                    </table>
                      <a class="float-left btn btn-danger" href="./index.php?page=payments">cancel</a>
                      <input class="float-right btn btn-primary" type="submit" name="submit">
                    </form>
                  </div>
                </div>
              </div>
            </div>