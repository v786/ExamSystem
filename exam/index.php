<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Exam System</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  	<?php include "navbar.php"; ?>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
			  <h1>Heading For Exam</h1>
			  <p>Sub Heading</p> 
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="btn-group btn-group">
					 
					<button class="btn btn-default" type="button">
						Subject1
					</button> 
					<button class="btn btn-default" type="button">
						Subject2
					</button> 
				</div>
			</div>
			<div class="col-md-4 timer">
				Time icon: <span class="glyphicon glyphicon-time"></span>
				<a id="demo" style="text-align: center;font-size: 20px;"></a>
			</div>
			<script src="js/timer.js" ></script>
		</div>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<h3>
					Question Number:
				</h3>
			</div>
			
			<p>
				Question Body
			</p>
			<h3>
				Select Answer:
			</h3>
			<form class="form-horizontal" role="form">
				<div class="form-group">        
		      <div class=" col-sm-10">
		        <div class="checkbox">
		          <label>
		          	<input type="checkbox" name="remember">
		          	Option 1
		          </label>
		        </div>
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-10">
		        <div class="checkbox">
		          <label>
			          <input type="checkbox" name="remember">
			          Option 2
		          </label>
		        </div>
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-10">
		        <div class="checkbox">
		          <label>
			          <input type="checkbox" name="remember">
			          Option 3
		          </label>
		        </div>
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-10">
		        <div class="checkbox">
		          <label>
		          	<input type="checkbox" name="remember">
		          	Option 4
		          </label>
		        </div>
		      </div>
		    </div>
				<div class="col-md-8">
					<div class="col-sm-6">
						<button type="submit" class="btn btn-warning">
							Mark For Review
						</button>
					</div>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success">
							Submit And Next Question
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<blockquote>
				<p>
					Exam Name :TEST5
				</p> <small>Section Name:<cite> PHYSICS-JEEMAIN</cite></small>
			</blockquote>
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
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Footer
			</h3>
		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>