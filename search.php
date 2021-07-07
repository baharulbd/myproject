<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>

<center>
<table border="1px" width="80%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Possition</th>
        <th>Salary</th>
        <th>Address</th>
        <th>Phone Number</th>
    </tr>
    <?php 
    if (isset($_POST['s'])) {
        $nm = $_POST['s'];
        echo $nm;
        
        $sql = "SELECT * FROM members WHERE name LIKE '%$nm%'";
        $data = $db->query($sql);
            foreach($data as $row){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['possition']; ?></td>
               <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
            </tr>
    <?php
        }
    }
 ?>
 </table>
</center>
