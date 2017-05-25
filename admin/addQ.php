  <?php include "head.php" ;?>

    <?php include "navbar.php"; ?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <form method="post" action="addQ.php" enctype="multipart/form-data">
        <br>
        <div class="input-group col-sm-6">
          <label for="sel1">Select list (select one):</label>
          <select class="form-control" id="sel1" name="subject">
            <?php 
              include '../db/dbconn.php';

              $getSub = "SELECT * FROM Subject";
              $query = mysqli_query($dbcon,$getSub);
              while($row = mysqli_fetch_array($query)){
            ?>
            <option value="<?=$row[1]?>"><?=$row[1]?></option>
            <? } ?>
          </select>
        </div>
        <br>
        <div class="input-group col-sm-6">
          <a href="addSub.php">Subject Not Found ?</a>
        </div>
        <br>        
        <div class="input-group">
          <span class="input-group-addon">Question</span>
          <input id="msg" type="text" class="form-control" name="Ques" placeholder="Additional Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Correct Answer</span>
          <input id="msg" type="text" class="form-control" name="CA" placeholder="Additional Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Option</span>
          <input id="msg" type="text" class="form-control" name="Op1" placeholder="Additional Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Option</span>
          <input id="msg" type="text" class="form-control" name="Op2" placeholder="Additional Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Option</span>
          <input id="msg" type="text" class="form-control" name="Op3" placeholder="Additional Info">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Option</span>
          <input id="msg" type="text" class="form-control" name="Op4" placeholder="Additional Info">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="addQ">Add Question</button>
      </form>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
<?php include "footer.php" ?>
<?php
  include "../db/dbconn.php";
  include "../db/lib.php"; 
  if(isset($_POST['addQ'])){
    $subject = $_POST['subject'];
    $ques = $_POST['Ques'];
    $correctAns = $_POST['CA'];
    $opt1 = $_POST['Op1'];
    $opt2 = $_POST['Op2'];
    $opt3 = $_POST['Op3'];
    $opt4 = $_POST['Op4'];

    $inq = "INSERT into question VALUES (NULL,'$subject','$ques','$opt1','$opt2','$opt3','$opt4','$correctAns')";
    $query = mysqli_query($dbcon,$inq);
    if($query){
      shout("Question Added");
      loc("addQ.php");
    }
    else{
      shout("Error $ques");
    }
  }
?>