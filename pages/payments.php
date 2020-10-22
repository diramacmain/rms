<?php 
require './includes/sitedb.inc.php'; 
$sql = "SELECT * FROM vcollections";
$result = $conn2->query($sql);

$sqlPay = "SELECT * FROM tpayments";
$resultPay = $conn2->query($sqlPay);
?>

<div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
          <h4 class="card-title ">Request List</h4>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="reqlistTable" class="table">
            <thead class=" text-primary">
              <th>ReqId</th>
              <th>Member</th>
              <th>Date of Request</th>
              <th>Exp Amount</th>
              <th>Total Paid</th>
              <th>Loan Period</th>
              <th>Status</th>
              <th>Comments</th>
              <th>Pay</th>
            </thead>
            <tbody>
              <?php
              if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                      $startDate = substr($row['ActivationDate'],0,10);
                      $queryParam = "&R=".$row['reqID']."&N=".$row['ClientName']."&XA=".$row['ExpAmount']."&TP=".$row['TotalPaid'];
                      echo "<tr><td>".$row['reqID']."</td><td>".$row['Member']."</td><td>".$startDate."</td><td>R ".$row['ExpAmount']."</td><td>".$row['TotalPaid']."</td><td>".$row['vchloanPeriod']."</td><td>status</td><td>Coments</td><td><a href="."./index.php?page=loan_payment".$queryParam.""." class="."btnRLEdit".">Pay <i class="."material-icons".">payment</i></a></td></tr>";
                  }
              } else {
                  echo "no results";
              }
              
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
    <div class="card">
      <div class="card-header card-header-primary">
          <h4 class="card-title ">Payments</h4>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="paymentsTable" class="table">
            <thead class=" text-primary">
              <th>Payment_id </th>
              <th>req_Id</th>
              <th>Amount</th>
              <th>Payment Date</th>
            </thead>
            <tbody>
              <?php
              if (!$resultPay) {
                trigger_error('Invalid query: ' . $conn2->error);
              }
              if($resultPay->num_rows > 0){
                  while($rowp = $resultPay->fetch_assoc()){
                      $paymentDate = substr($rowp['payment_Date'],0,10);
                      echo "<tr><td>".$rowp['payment_id']."</td><td>".$rowp['req_Id']."</td><td>R ".$rowp['amount']."</td><td>".$paymentDate."</td></tr>";
                  }
              } else {
                  echo "no results";
              }
              $conn2->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> 

</div>
          
<script>
$(document).ready( function () {
      $('#reqlistTable').DataTable();
      $('#paymentsTable').DataTable();
  } );
</script>