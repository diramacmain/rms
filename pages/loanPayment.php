
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
                        <th>Loan Amount</th>
                        <th>Balance</th>
                        <th>Payment</th>
                      </thead>
                      <tbody>
                        <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
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