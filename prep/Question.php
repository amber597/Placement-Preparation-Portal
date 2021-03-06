<?php include('includes/header.php'); ?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
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


.padding {
    padding: 1rem
}
	.block{
		font-size: 0.95rem;
    	font-weight: 500
    	background-color: #e8e8e8;
    	height: 30%;
    	margin-bottom: 0.625rem;

    	
	}
	.card{
		position:relative;
		left:5%;
		width:100%;
	}
	#questype{
		position:relative;
		top:25%;
		left:7%;
		width:30%;
		

	}
	#quesdisc{
		position:relative;
		top:25%;
		left:20%;
		width:50%;
		

	}

	
	.btn {
    	border-radius: 0;
    	margin-top: 5px;
	}
	.btn-group-xs>.btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
	}
	.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
	}
	#companytag{
		position: relative;
		left: 7%;
		
	}
	#q1{
		position: relative;
		left: 7%;
		
	}

	#question{
		position: relative;
		left: 0%;
		width:90%;
		padding: 2%;
		border: 2px solid #999999; border-radius: 2px;
	}
	.onoffswitch {
    position: relative; width: 65px;
    left:5%;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch {
    position: relative; width: 68px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 18px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 20px; padding: 0; line-height: 20px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "";
    padding-left: 10px;
    background-color: #34A7C1; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Like";
    padding-right: 10px;
    background-color: ; color: #0F0C0C;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 26px; margin: -3px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 44px;
    border: 2px solid #999999; border-radius: 18px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}
.card-title{
	font-size: 1.2rem;
    	font-weight: 500
    	background-color: #e8e8e8;
    	height: 30%;
    	margin-bottom: 0.625rem;
}
#element{
    
}
</style>
<body>
<?php include('includes/navbar.php'); ?>
	<div class="wrapper">
  		<?php include('includes/sidebar1.php'); ?>
		<div id="content">
			
  				<div class="page-content page-container">
     				<div class="padding">
     				<div class="row container d-flex justify-content-center">
              			<div class="col-lg-10 grid-margin stretch-card">
                          <div class="card" style="width: 829px;">
                            <div class="card-header text-center"style="font-weight: bold; font-size: large;">
                            Question
                            <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
</button>
                                   </div>
                   			<div class="card-body">
                       			
                       			<section class="row">
                       				<div id="questype" class="block ">
                       					<label class="element"> Question Type: </label>
                       					<a > Coding</a>
                       				</div>
                       				<div id="quesdisc" class="block ">
                       					<label class="element"> Question Discipline: </label>
                       					<a > Computer Science</a>
                       				</div>
                       			</section>
                       			<section class="row">
                       				<div class="block" id="companytag">
                       					<label> Asked in Companies:</label>
                       					<!--<a class="btn btn-warning btn-xs" style="border-radius:3px;background-color:#3a484e;border-color:#3a484e; padding:3px 7px;cursor:text;">Company Tags</a>-->
                       					<div  class="btn btn-info btn-xs" style="text-decoration:none;">Amazon</div>
                       					<div  class="btn btn-info btn-xs" style="text-decoration:none;">Google</div>
                       					<div class="btn btn-info btn-xs" style="text-decoration:none;">OLA</div>
                       					<div  class="btn btn-info btn-xs" style="text-decoration:none;">UIDI</div>
                       				</div>
                       			</section>
                       			<section class="row">
                       				<div class="block" id="q1">
                       					<label> Question:</label>
                       					<div id="question">The n-queens puzzle is the problem of placing n queens on an n??n chessboard such that no two queens attack each other. Given an integer n, print all distinct solutions to the n-queens puzzle. Each solution contains distinct board configurations of the n-queens??? placement, where the solutions are a permutation of [1,2,3..n] in increasing order, here the number in the ith place denotes that the ith-column queen is placed in the row with that number. For eg below figure represents a chessboard [3 1 4 2].</div>
                       				</div>
                       			</section>
                       			
                       				<div class="onoffswitch">
                                       <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
</button>

                                        
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