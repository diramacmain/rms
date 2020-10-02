<?php 
require './includes/sitedb.inc.php'; 
$sql = "SELECT * FROM tcollections";
$result = $conn2->query($sql);

?>

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Collections</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Client Name
                        </th>
                        <th>
                          ClientID
                        </th>
                        <th>
                          Activation Date
                        </th>
                        <th>
                          Loan Amount
                        </th>
                        <th>
                          Expected Amount
                        </th>
                        <th>
                          Installements
                        </th>
                        <th>
                          Total Paid
                        </th>
                        <th>
                          Outstanding
                        </th>
                      </thead>
                      <tbody>
                      <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $ActiveDate = substr($row['ActivationDate'],0,10);
                                echo "<tr><td>".$row['reqID']."</td><td>".$row['ClientName']."</td><td>".$row['ClientID']."</td><td>".$ActiveDate."</td><td>R ".$row['reqAmount']."</td><td>R ".$row['ExpAmount']."</td><td>R ".$row['Installments']."</td><td>R ".$row['totalPaid']."</td><td>R ".$row['Outstanding']."</td></tr>";
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