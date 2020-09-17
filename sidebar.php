<?php
function activePage($page)
{
    if(isset($_GET['page'])){
        if($_GET['page']==$page)
        {
            echo "active";
        }
        else{echo "";}
    }
}
?>
<li class="nav-item <?php activePage("dashboard");?>">
    <a class="nav-link" href="./index.php?page=dashboard">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item <?php activePage("request_loan");?>">
    <a class="nav-link" href="./index.php?page=request_loan">
        <i class="material-icons">assignment</i>
        <p>Request Loan</p>
    </a>
</li>
<li class="nav-item <?php activePage("request_list");?>">
    <a class="nav-link" href="./index.php?page=request_list">
        <i class="material-icons">assignment</i>
        <p>Request List</p>
    </a>
</li>
<li class="nav-item <?php activePage("collections");?>">
    <a class="nav-link" href="./index.php?page=collections">
        <i class="material-icons">content_paste</i>
        <p>Collections</p>
    </a>
</li>
<!--
 <li class="nav-item <?php activePage("requests");?>">
    <a class="nav-link" href="./index.php?page=requests">
        <i class="material-icons">assignment</i>
        <p>Requests</p>
    </a>
</li>
<li class="nav-item <?php activePage("profile");?>">
    <a class="nav-link" href="./index.php?page=profile">
        <i class="material-icons">person</i>
        <p>User Profile</p>
    </a>
</li>
<li class="nav-item <?php activePage("customers");?>">
    <a class="nav-link" href="./index.php?page=customers">
        <i class="material-icons">group</i>
        <p>Customers</p>
    </a>
</li>
 -->

