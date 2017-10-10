<?php
  session_start();
  include "../db/dbconn.php";

  $query = "SELECT COUNT(id) FROM question";
  $run = mysqli_query($dbcon, $query);
  $count = mysqli_fetch_array($run);

  if(isset($_SESSION['qno']) && $_SESSION['qno']<=$count[0]){
    $cq = $_SESSION['qno'];
  }
  elseif($cq>=$count[0]-1){
    # code...
    $cq = 1;
    $_SESSION['qno'] = 1;
  }
  else{
  	$cq = 1;
  }
  $query = "SELECT * FROM question LIMIT $cq , 1";
  $run = mysqli_query($dbcon, $query);
  while ($row = mysqli_fetch_array($run)) {
  $sub = $row[1];
  $ques = $row[2];
  $opt1 = $row[3];
  $opt2 = $row[4];
  $opt3 = $row[5];
  $opt4 = $row[6];
}
?>
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
		<div class="col-md-8">
      <div class="panel panel-default" style="padding-left: 10px">
        <h3>
           # <?=$cq?> Question
        </h3>
      </div>
      <div class="panel panel-body">
      <p>
        <?=$ques?>
      </p>
      </div>
      <div class="panel panel-default" style="padding: 10px">
      <h3>
        Select Answer:
      </h3>
      <form class="form-horizontal" role="form" action="exam.php" method="post">
        <div class="form-group">        
          <div class=" col-sm-10">
            <div class="checkbox">
              <label>
                <input type="radio" name="op" value="<?=$opt1?>">
                <?=$opt1?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="radio" name="op" value="<?=$opt2?>">
                <?=$opt2?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="radio" name="op" value="<?=$opt3?>">
                <?=$opt3?>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-10">
            <div class="checkbox">
              <label>
                <input type="radio" name="op" value="<?=$opt4?>">
                <?=$opt4?>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-8" style="padding: 10px;margin: 5px;">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-warning" name="review">
              Mark For Review
            </button>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success" name="submit">
              Submit And Next Question
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
		<div class="col-md-4" style="background-color: #bfbfff;">
			<div class="panel" style="padding: 5px; margin-top: 12%;">
				<p>
					Exam Name :TEST5
				</p> <small>Section Name:<cite> PHYSICS-JEEMAIN</cite></small>
			</div>
			<div class="col-md-12">
				<ul class="pagination">
					<?
						$i = 0;
						while($i<=$count[0]){
							if ($cq==$i) {
							?>
							<li class="active"><a href="#"><?=$i?></a></li>
							<?
							}
							else{
							?><li><a href="#"><?=$i?></a></li>
							<?
							}
							$i += 1;
						}
							?>
				  	
				</ul>
			</div>
			<div>
				<span class="label label-default">Not Appeared</span>
				<span class="label label-warning">Marked For Review</span>
				<span class="label label-success">Submitted</span>
			</div>
			<div class="col-sm-2">
				<a href="getResult.php" class="btn" type="button">END EXAM</a>
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
    <script type="text/javascript">
      var stillAlive = setInterval(function () {
          /* XHR back to server
             Example uses jQuery */
          $.get("stillAlive.php?page=time");
      }, 1000);
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  <?php include "footer.php";?>
<?php
  include '../db/dbconn.php';
  include '../db/lib.php';
  if(isset($_POST['review'])){
    $ans = $_POST['remember'];
    $status = 0;
    $query = "INSERT INTO answer VALUES(NULL,'$ans','$status')";
    $run = mysqli_query($dbcon, $query);
    if($run){
      if($_SESSION['qno'] < $count[0]-1){
      	$_SESSION['qno'] = $cq + 1;
      }
      else{
      	shout("Mark All Questions");
      	$_SESSION['qno'] = 1;
      }
      shout("Marked For Review");
      loc("exam.php");
    }
    else{
      shout("error");
      loc("exam.php");
    }
  }
  if(isset($_POST['submit'])){
    $ans = $_POST['remember'];
    $status = 1;
    $query = "INSERT INTO ANSWER VALUES(NULL,'$ans','$status')";
    $run = mysqli_query($dbcon, $query);
    if($run){
      shout("Answer Submitted $cq");
      if($_SESSION['qno'] < $count[0]-1){
      	$_SESSION['qno'] = $cq + 1;
      }
      else{
      	shout("Test Over");
      	$_SESSION['qno'] = 1;
      }
      loc("exam.php");
    }
    else{
      shout("error");
      loc("exam.php");
    }
  }
?>