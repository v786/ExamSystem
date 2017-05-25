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
      <table class="table table-bordered table-stripped table-hover" id="student">
        <thead>
          <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          include "../db/dbconn.php";
          $query = "SELECT * FROM student";
          $run = mysqli_query($dbcon, $query);
          while ($row = mysqli_fetch_array($run)) {
            $name = $row[1];
            $password = $row[2];
            $email = $row[3];
          ?>
          <tr>
            <td><?=$name?></td>
            <td><?= $password ?></td>
            <td><?= $email ?></td>
          </tr>
          <? } ?>
        </tbody>
      </table>
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
    <script type="text/javascript">
      $(document).ready( function () {
        var table = $('#student').DataTable();
      } );
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <?php include "footer.php" ?>
