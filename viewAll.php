<?php

include('partials/header.php');

?>

<div class="container">
   <div class="card">

   <a class="waves-effect waves-light btn #006064 cyan darken-4" href="index.php"><i class="material-icons left">arrow_back</i>Go Back</a>

   <h5>List of Users</h5>

   <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
        <!-- <th>Details</th> -->
    </tr>
    </thead>

    <tbody>

    <?php

        require('database/view.php');

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>
         <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['firstName']; ?></td>

            <td><?php echo $row['lastName']; ?></td>

            <td><?php echo $row['phone']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td><a class="waves-effect waves-light btn #ffc107 amber" href="updateForm.php?id=<?php echo $row['id']; ?>"><i class="material-icons left">mode_edit</i>Edit</a> &nbsp; <a class="waves-effect waves-light btn #ff1744 red accent-3" href="database/delete.php?id=<?php echo $row['id']; ?>"><i class="material-icons left">clear</i>Delete</a></td>
           
            <!-- <td><a class="waves-effect waves-light btn #6200ea deep-purple accent-4" href="cardView.php?id=<?php echo $row['id']; ?>"><i class="material-icons left">apps</i>Show</a></td> -->

         </tr>
         <?php       
            }
        }

            ?>      
    </tbody>

   </table>

    </div>
</div>

<?php 

include('partials/footer.php')

?>