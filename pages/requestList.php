<?php 
require './includes/sitedb.inc.php'; 
$sql = "SELECT * FROM vrequestlist";
$result = $conn2->query($sql);

?>

<div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ReqId</th>
                        <th>Member</th>
                        <th>Client ID</th>
                        <th>Date of Request</th>
                        <th>Amount</th>
                        <th>Request Type</th>
                        <th>Status</th>
                        <th>Comments</th>
                      </thead>
                      <tbody>
                        <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr><td>".$row['reqID']."</td><td>".$row['UserCreated']."</td><td>".$row['ClientID']."</td><td>".$row['StartDate']."</td><td>".$row['reqAmount']."</td><td>".$row['vchRequestType']."</td><td>".$row['vchRequestStatus']."</td><td>".$row['Comments']."</td></tr>";
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