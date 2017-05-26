<?php
  session_start();
  include "../db/dbconn.php";
  if(isset($_SESSION['qno'])){
    $cq = $_SESSION['qno'];
  }
  else{
    # code...
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
      <form class="form-horizontal" role="form" action="getQues.php" method="post">
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
<?php
  include '../db/dbconn.php';
  include '../db/lib.php';
  if(isset($_POST['review'])){
    $ans = $_POST['remember'];
    $status = 0;
    $query = "INSERT INTO answer VALUES(NULL,'$ans','$status')";
    $run = mysqli_query($dbcon, $query);
    if($run){
      $_SESSION['qno'] = $cq + 1;
      shout("Marked For Review $cq $ans ".$_SESSION['qno']);
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
      $_SESSION['qno'] = $cq + 1;
      loc("exam.php");
    }
    else{
      shout("error");
      loc("exam.php");
    }
  }
?>