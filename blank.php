<?php require('includes/config.php'); ?>
<?php require 'sidebar.php'; ?>
<?php require 'header.php'; ?>





<center>
	
						<form action="" method="POST">                        
                            <div class="form-group mb-3">
                                <label for="">Event Date & Time</label>
                                <input type="datetime-local" name="event_dt" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_datetime" class="btn btn-primary">Save Event</button>
                            </div>
                        </form>

</center>
<?php 
	if (isset($_POST['save_datetime'])) {
		$dates = $_POST['event_dt'];
		echo $dates;
	}

 ?>
