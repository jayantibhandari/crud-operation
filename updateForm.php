<?php

include('partials/header.php');

?>

<div class="container">
    <div class="card">
    <a class="waves-effect waves-light btn #006064 cyan darken-4" href="index.php"><i class="material-icons left">arrow_back</i>Go Back</a>
    
        <form action="" method="post">
            <?php
            include "database/connect.php";

            if (isset($_POST['update'])) {

                $user_id = $_POST['user_id'];

                $firstname = $_POST['firstName'];

                $lastname = $_POST['lastName'];

                $email = $_POST['email'];

                $phone = $_POST['phone'];

                $sql = "UPDATE `details` SET `firstName`='$firstname',`lastName`='$lastname',`phone`='$phone',`email`='$email' WHERE `id`='$user_id'";

                $result = $conn->query($sql);

                if ($result == TRUE) {
                    header('Location:viewAll.php');
                } else {

                    echo "Error:" . $sql . "<br>" . $conn->error;
                }
            }

            if (isset($_GET['id'])) {

                $user_id = $_GET['id'];

                $sql = "SELECT * FROM `details` WHERE `id`='$user_id'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $first_name = $row['firstName'];

                        $last_name = $row['lastName'];

                        $email = $row['email'];

                        $phone  = $row['phone'];

                        $id = $row['id'];
                    }
            ?>
                    <h5>CRUD OPERATION</h5>

                    <div class="row">

                        <!-- input fields -->
                        <div class="col s12">
                            <div class="input-field ">
                                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                <i class="material-icons prefix">person</i>
                                <input type="text" id="firstName" class="autocomplete" name="firstName" palceholder="">
                                <label for="firstName"><?php echo $first_name; ?></label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field ">
                                <i class="material-icons prefix">person_add</i>
                                <input type="text" id="lastName" class="validate" name="lastName" palceholder="">
                                <label for="lastName"><?php echo $last_name; ?></label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field ">
                                <i class="material-icons prefix">phone</i>
                                <input type="number" id="phone" class="autocomplete" name="phone" palceholder="">
                                <label for="phone"><?php echo $phone; ?></label>
                            </div>
                        </div>


                        <div class="col s12">
                            <div class="input-field ">
                                <i class="material-icons prefix">email</i>
                                <input type="text" id="email" class="autocomplete" name="email" palceholder="">
                                <label for="email"><?php echo $email; ?></label>
                            </div>
                        </div>


                        <div class="col s12">
                            <button type="submit" name="update" class="waves-effect waves-light btn #5e35b1 deep-purple darken-1"><i class="material-icons left">save</i>Update</button>
                        </div>

                    </div>
        </form>
    </div>
</div>

<?php } else
                    echo "<h1>Failed to update</h1>";
            }
?>

<?php

include('partials/footer.php')

?>