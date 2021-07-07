<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>


                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><center>My Coumpany</center></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                    <form action="search.php" method="post">
                                            <input type="search" name="s">
                                            <input type="submit" name="save" value="Search"> 
                                    </form>          
                </div>

<?php 
    $query =  "SELECT * FROM members";
    $data = $db->query($query);

    echo '<table width="100%" border="1" cellpading="5" cellspacing="5" style="color:#171717">
        <tr>
            <th>ID</td>
            <th>Name</td>
            <th>Possition</td>
            <th>Salary</td>
            <th>Address</td>
            <th>Phone Number</td>
        </tr>';
    foreach($data as $row){
        echo '<tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["possition"].'</td>
                <td>'.$row["salary"].'</td>
                <td>'.$row["address"].'</td>
                <td>'.$row["phone_number"].'</td>
            </tr>';
        
    }
 ?>