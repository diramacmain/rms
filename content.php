<div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">

            <?php 
            if(isset($_GET['page']))
            {
                if($_GET['page']='dashboard'){require './pages/dashboard.php';}
                elseif($_GET['page']='requests'){require './pages/requests.php';}
                elseif($_GET['page']='costomers'){require './pages/customers.php';}
                elseif($_GET['page']='collections'){require './pages/collections.php';}
                elseif($_GET['page']='allcollections'){require './pages/allcollections.php';}
                elseif($_GET['page']='allcostomers'){require './pages/allcostomers.php';}
                elseif($_GET['page']='profile'){require './pages/profile.php';}
            }
            else {require './pages/dashboard.php';}
            ?>
          </div>
        </div>
      </div>