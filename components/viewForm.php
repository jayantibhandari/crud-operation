<div class="container">
   <div class="card">

   <h5>List of Users</h5>

   <table>
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
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

         </tr>
         <?php       
            }
        }

            ?>      
    </tbody>

   </table>

    </div>
</div>