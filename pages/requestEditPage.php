<div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="./includes/editrequest.inc.php" method="post">
                    <table class="table editPageTable">
                      <thead class=" text-primary">
                        <th>ReqId</th>
                        <th>Member</th>
                        <th>Client ID</th>
                        <th>Status</th>
                        <th>Comments</th>
                      </thead>
                      <tbody>
                        <tr>
                            <td>
                                <input type="text" name="reqID" value="<?php if(isset($_GET['reqID'])){echo $_GET['reqID'];}?>" readonly>
                            </td>
                            <td>
                                <input  type="text" name="member" value="<?php if(isset($_GET['m'])){echo $_GET['m'];}?>" readonly>
                            </td>
                            <td>
                                <input  type="text" name="cID" value="<?php if(isset($_GET['cID'])){echo $_GET['cID'];}?>" readonly>
                            </td>
                            <td>
                            <select class="form-contol" style="width:150px;" name="reqStatus" id="reqStatus" class="">
                                <option  value="1">Request</option>
                                <option  value="2">Approved</option>
                                <option  value="3">Disbursed</option>
                                <option  value="4">Canceled</option>
                                <option  value="5">Rejected</option>
                            </select>
                            </td>
                            <td>
                                <textarea name="comment"></textarea>
                            </td>
                          <td>
                        </tr>
                      </tbody>
                    </table>

                            <input class="float-right btn-submit" type="submit" name="submit"></input>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <script>
            $(document).ready(function(){
              $reqst = "<?php echo $_GET['RS'];?>";
              $('#reqStatus').children('option').each(function () {
                if($reqst == this.text){
                  $(this).attr('selected','selected');
                } 
              });
            });
            </script>