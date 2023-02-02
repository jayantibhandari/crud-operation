<div class="container">
   <div class="card" id="formcolor">
    <form action="" method="post" >

    <h3>Enter your Details</h3>
    
    <div class="row">
   
    <!-- input fields -->
    <div class="col s12">
        <div class="input-field ">
          <i class="material-icons prefix">person</i>
          <input type="text" id="firstName" class="autocomplete" name="firstName">
          <label for="firstName">First Name</label>
        </div>
    </div>

    <div class="col s12">
        <div class="input-field ">
          <i class="material-icons prefix">person_add</i>
          <input type="text" id="lastName" class="validate" name="lastName">
          <label for="lastName">Last Name</label>
        </div>
    </div>

    <div class="col s12">
        <div class="input-field ">
          <i class="material-icons prefix">phone</i>
          <input type="number" id="phone" class="autocomplete" name="phone">
          <label for="phone">Phone</label>
        </div>
    </div>


    <div class="col s12">
        <div class="input-field ">
          <i class="material-icons prefix">email</i>
          <input type="text" id="email" class="autocomplete" name="email">
          <label for="email">Email</label>
        </div>
    </div>

   
    <div class="col s12">
    <button type="submit" name="submit" class="waves-effect waves-light btn light-green accent-3" onclick="validate()"><i class="material-icons left">save</i>Save</button>
    <a href="viewAll.php" class="waves-effect waves-light btn light-blue darken-4"><i class="material-icons left ">format_list_bulleted</i>View All</a>
    </div>

    </div>
    </form>

    </div>
</div>