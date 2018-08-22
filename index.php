<!DOCTYPE html>
<?php 
	include 'db.php';

	$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
	$perPage = (isset($_GET['per-page']) && (int)($_GET['per-page']) <= 50 ? (int)$_GET['per-page'] : 5);

	$start = ($page > 1 ) ? ($page * $perPage) - $perPage : 0;

	$sql = "select * from tasks limit ".$start.", ".$perPage." ";
	echo $total = $db->query("select * from tasks")->num_rows;
	echo $pages = ceil($total / $perPage);

	$rows = $db -> query($sql);


 ?>

<html>
	<head>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity = "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin = "anonymous"></script>
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin= "anonymous">
		<title>Crud practice</title>
	</head>
	<body>
		<div class="container">
			<div class="row" style = "margin-top: 70px;">
				<center><h1>Todo List</h1></center>
				<div class = "col-md-10 col-md-offset-1">
					<button type = "button" data-target = "#myModal" data-toggle = "modal" class = "btn btn-success">Add Task</button>
					<button type = "button" class = "btn btn-default pull-right">Print</button>
					<hr><br>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Add Task</h4>
					      </div>
					      <div class="modal-body">
					      	<form method = "post" action = "add.php">
					      		<div class="form-group">
					      			<label>Task Name</label>
					      			<input type = "text" required name = "task" class = "form-control">
					      		</div>

					      		<input type="submit" name="send" value="Add task" class="btn btn-success"> 
					      	</form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
					</div>

					<table class="table">
						<thead>
							<tr>
								<th>Number#</th>
								<th>Task</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php while($row = $rows->fetch_assoc()):	?>
								
								<th scope="row"><?php echo $row['id'] ?></th>
								<td class = "col-md-10"><?php echo $row['name'] ?></td>
								<td><a href ="update.php?id=<?php echo $row['id']; ?>" class = "btn btn-success">Edit</a></td>
								<td><a href ="delete.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger">Delete</a></td>
							</tr>
							<?php endwhile; ?>
							
						</tbody>
					</table>
					<center>
						<ul class = "pagination">
							<?php for($i = 1; $i <= $pages; $i++): ?>
							<li><a href="?page=<?php echo $i ?>&per-page=<?php echo $perPage; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
						</ul>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>