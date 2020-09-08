<div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">

            <?php 
            if(isset($_GET['page'])){
                if($_GET['page']='costomers'){
                    require './pages/customers.php';
                }
            }
            ?>

          </div>
        </div>
      </div>