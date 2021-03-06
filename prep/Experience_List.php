<?php include('includes/header.php'); ?>
<style>
  body {
    background-color: #f9f9fa
}

.flex {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto
}

@media (max-width:991.98px) {
    .padding {
        padding: 1.5rem
    }
}

@media (max-width:767.98px) {
    .padding {
        padding: 1rem
    }
}

.table-fixed  {
    height: 375px;
    overflow-y: auto;
    width: 100%;
}

.table-fixed {
    display: block;
    font-size: medium;
}

.table-fixed  {
    float: left;
    position: relative;

    &::after {
        content: '';
        clear: both;
        display: block;
    }
}
.padding {
    padding: 1rem
}

.card {
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none
}

.pl-3,
.px-3 {
    padding-left: 1rem !important
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 0
}

.card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    font-size: 1rem;
    font-weight: 500
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}

.table,
.jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table thead th,
.jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase
}

.table td,
.jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .475rem 0.4375rem
}

.mt-10 {
    padding: 0.875rem 0.3375rem !important
}
 #link:hover{
     color:blue;
     text-decoration:underline
 }


  </style>
<body>
<?php include('includes/navbar.php'); ?>
  <div class="wrapper">
  <?php include('includes/sidebar2.php'); ?>
  <?php include('filters.php'); ?>
  <div id="content">
     <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center" style=" margin-left: -105px;">
              <div class="col-lg-10 grid-margin stretch-card">
                  <div class="card" style="width: 829px;">
                      <div class="card-body">
                          <h4 class="card-header text-center" style="font-weight: bold; font-size: large;">Interview Experiences</h4>

                          <div class="table-responsive">
                              <table class="table table-striped table-fixed" >
                              <thead>
    <tr>
    <th scope="col" style="width: 250px;">Experience Set</th>
      <th scope="col" style="width: 250px;">Author Name</th>
      <th scope="col"style="width: 250px;">Company</th>
    </tr>
  </thead>
  <tbody id="ExpList">
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Ishaan Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Ishaan Name</th>
    <td>Company</th>
    </tr>
    <tr>
    <td><a id="link" href="Experience.php">Experience Set-1 </a></th>
    <td>Author Name</th>
    <td>Company</th>
    </tr>
  </tbody>
                              </table>
                          </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<?php include('includes/footer.php'); ?>
<script type="text/javascript">
            $(document).ready(function () {
    
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
</script>
  
</body>

