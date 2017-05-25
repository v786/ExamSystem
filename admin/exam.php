  <?php include "head.php" ;?>

  	<?php include "navbar.php"; ?>
  <div class="container-fluid">
	<div class="row" style="padding: 10px;">
		<div class="col-md-12">
			<div class="text-center">
			  <h1>Heading For Exam</h1>
			  <p>Sub Heading</p> 
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" style="padding: 1px;">
			<div class="col-md-8 well well-sm" >
				<div class="btn-group btn-group">
					 
					<button class="btn btn-default" type="button">
						Subject1
					</button> 
					<button class="btn btn-default" type="button">
						Subject2
					</button> 
				</div>
			</div>
			<div class="col-md-4 timer" style="box-shadow: 2px 2px; padding: 10px">
				<span class="glyphicon glyphicon-time"></span>Time Left : 
				<a id="demo" style="text-align: center;font-size: 20px;"></a>
			</div>
			<script src="js/timer.js" ></script>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<?php include "getQues.php" ?>
		<div class="col-md-4" style="background-color: #bfbfff;">
			<div class="panel" style="padding: 5px; margin-top: 12%;">
				<p>
					Exam Name :TEST5
				</p> <small>Section Name:<cite> PHYSICS-JEEMAIN</cite></small>
			</div>
			<div class="col-md-12">
				<ul class="pagination">
				  <li><a href="#">1</a></li>
				  <li class="active"><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">1</a></li>
				  <li class="active"><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">1</a></li>
				  <li class="active"><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				</ul>
			</div>
			<div>
				<span class="label label-default">Not Appeared</span>
				<span class="label label-warning">Marked For Review</span>
				<span class="label label-success">Submitted</span>
			</div>
			<div class="col-sm-2">
				<a href="#" class="btn" type="button">END EXAM</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
			</h3>
		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  <?php include "footer.php";?>