<?php 
require './includes/sitedb.inc.php'; 
$sql = "SELECT * FROM vrequestlist";
$result = $conn2->query($sql);

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
                        <th>Client ID</th>
                        <th>Date of Request</th>
                        <th>Amount</th>
                        <th>Request Type</th>
                        <th>Status</th>
                        <th>Comments</th>
                        <th>Pay</th>
                      </thead>
                      <tbody>
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $startDate = substr($row['StartDate'],0,10);
                                if($row['vchRequestStatus'] == "Disbursed" && $_SESSION['CustomerType']==2){
                                  $hide="hidden";
                                } else{
                                  $hide =""; 
                                }
                                echo "<tr><td>".$row['reqID']."</td><td>".$row['UserCreated']."</td><td>".$row['ClientID']."</td><td>".$startDate."</td><td>R ".$row['reqAmount']."</td><td>".$row['vchRequestType']."</td><td>".$row['vchRequestStatus']."</td><td>".$row['Comments']."</td><td><a ".$hide." href="."./index.php?page=loan_payment&reqID=".$row['reqID']."&m=".$row['UserCreated']."&cID=".$row['ClientID']."&RS=".$row['vchRequestStatus']." class="."btnRLEdit".">Pay <i class="."material-icons".">payment</i></a></td></tr>";
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
                        <th>Client Name</th>
                        <th>Date of Request</th>
                        <th>Amount</th>
                        <th>Request Type</th>
                        <th>Status</th>
                        <th>Comments</th>
                        <th>Edit</th>
                      </thead>
                      <tbody>
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $startDate = substr($row['StartDate'],0,10);
                                if($row['vchRequestStatus'] == "Disbursed" && $_SESSION['CustomerType']==2){
                                  $hide="hidden";
                                } else{
                                  $hide =""; 
                                }
                                echo "<tr><td>".$row['reqID']."</td><td>".$row['UserCreated']."</td><td>".$row['ClientID']."</td><td>".$startDate."</td><td>R ".$row['reqAmount']."</td><td>".$row['vchRequestType']."</td><td>".$row['vchRequestStatus']."</td><td>".$row['Comments']."</td><td><a ".$hide." href="."./index.php?page=loan_payment&reqID=".$row['reqID']."&m=".$row['UserCreated']."&cID=".$row['ClientID']."&RS=".$row['vchRequestStatus']." class="."btnRLEdit".">edit <i class="."material-icons".">build_circle</i></a></td></tr>";
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
              } );
            </script>