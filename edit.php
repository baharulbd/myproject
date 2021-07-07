<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><center>My Company Information</center></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                    <form action="search.php" method="post">
                                            <input type="search" name="s">
                                            <input type="submit" name="save" value="Search"> 
                                    </form>          
                </div>
<center>
   <center>
<table border="1px" width="70%" style="color:#171717">
     <tr>
            <td colspan="6" style="color:red"><b><center><i>Data Updata information</i></center></b></td>
           
            
        </tr>
        <tr>
            <td><b>id</b></td>
            <td><b>Name</b></td>
            <td><b>Possition</b></td>
            <td><b>Salary</b></td>
            <td><b>Address</b></td>
            <td><b>Phone Number</b></td>
            <td><b>Edit</b></td>
            <td><b>Delete</b></td>
            
        </tr>
        <?php 
        $sql = "SELECT * FROM members";
        $data = $db->query($sql);
        foreach($data as $row){
            $id= $row['id'];
            $name= $row['name'];
            $possition= $row['possition'];
            $salary= $row['salary'];  
            $address= $row['address'];   
           $phone_number = $row['phone_number'];  
     ?>
    
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $possition; ?></td>
            <td><?php echo $salary; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $phone_number; ?></td>
<td><a href="help_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>           
 <td><a href="delete.php?delete=oks&id=<?php echo $row['id']; ?>">delete</a></td>


</tr>
    
    <?php }?>
    </table>
</center>
