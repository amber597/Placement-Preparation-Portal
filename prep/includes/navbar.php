<style>
.brand
{
    font-size: 1.25rem;
}
.topBar {
    background-color: 
#4a3c8d !important;
color: #fafafa;
}
#logout:hover{
    text-decoration:underline;
    color:white;
    font-size:20px;
}
</style>
<nav class="navbar navbar-inverse topBar">
        <div class="container-fluid">
        <ul class="nav navbar-nav navbar-left">
                <li> <button type="button" id="sidebarCollapse" class="btn btn-info">
                        &#9776; 
                    </button></li>
            </ul>
       
            <div class="navbar-header brand">
            IIT Bhilai Placement Preperation
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a id="logout" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
</nav>