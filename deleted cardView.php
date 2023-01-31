<?php

include('partials/header.php');

?>

<div class="container">
<div class="row">
    <div class="col s12 m7">
    <a class="waves-effect waves-light btn #006064 cyan darken-4" href="viewAll.php"><i class="material-icons left">arrow_back</i>Go Back</a><br>
      <div class="card">
     
      <?php

            require('database/view.php');

      if ($result->num_rows > 0) {

        $row = $result->fetch_assoc()

          ?>

        <div class="card-content">
         <ul>
            <li><p>ID : <?php echo $row['id']; ?></p></li>
            <li><p>First Name : <?php echo $row['firstName']; ?></p></li>
            <li><p>Last Name : <?php echo $row['lastName']; ?></p></li>
            <li><p>Phone : <?php echo $row['phone']; ?></p></li>
            <li><p>Email : <?php echo $row['email']; ?></p></li>
         </ul>
        </div>
        <div class="card-action">
          <a href="updateForm.php?id=<?php echo $row['id']; ?>">Edit</a>
          <a href="database/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </div>
        <?php
      }
        ?>
      </div>
    </div>
  </div>
</div>