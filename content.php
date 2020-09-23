<div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
            <?php 
            if(isset($_GET['page']))
            {
                if($_GET['page']=='dashboard'){require './pages/dashboard.php';}
                elseif($_GET['page']=='requests'){require "./pages/requests.php";}
                elseif($_GET['page']=='customers'){require './pages/customers.php';}
                elseif($_GET['page']=='collections'){require './pages/collections.php';}
                elseif($_GET['page']=='allcollections'){require './pages/allcollections.php';}
                elseif($_GET['page']=='allcostomers'){require './pages/allcostomers.php';}
                elseif($_GET['page']=='profile'){require './pages/profile.php';}
                elseif($_GET['page']=='request_loan'){require './pages/requestloan.php';}
                elseif($_GET['page']=='request_list'){require './pages/requestlist.php';}
                elseif($_GET['page']=='payments'){require './pages/payments.php';}
                elseif($_GET['page']=='request_edit_page'){require './pages/requestEditPage.php';}
                else {require './pages/dashboard.php';}
            }
            else {require './pages/dashboard.php';}
            ?>
          </div>
        </div>
      </div>