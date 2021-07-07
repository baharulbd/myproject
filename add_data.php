<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>
<?php include "function.php"; ?>

<?php 
if (isset($_POST['save'])) {
    $id  = $_POST['id'];
    $name  = $_POST['name'];
    $possition  = $_POST['possition'];
    $salary  = $_POST['salary'];
    $address  = $_POST['address'];
    $phone_number  = $_POST['phone_number'];
   Send_Data($db, $id, $name, $possition, $salary, $address, $phone_number);
 }
 ?>
<center>
    <form action="" method="post">
        <table>
            <tr>
                <td><b>id</b></td>                    
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td><b>Name</b></td>                    
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><b>Possition</b></td>                 
                <td><input type="text" name="possition"></td>
            </tr>
              <tr>
                <td><b>Salary</b></td>                 
                <td><input type="text" name="salary"></td>
            </tr>
             <tr>
                <td><b>Adress</b></td>                 
                <td><input type="text" name="address"></td>
            </tr> 

          <tr>
                <td><b>Phone Number</b></td>                 
                <td><input type="text" name="phone_number"></td>
            </tr>
            <tr>
                <td></td>                   
                <td><input type="submit" name="save" value="Add data"></td>
            </tr>
        </table>
    </form>
</center>
    <hr>






          </div>
            <!-- End of Main Content -->
            <?php require 'footer.php'; ?>












