<!DOCTYPE html>
<html>
	<head>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity = "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin = "anonymous"></script>
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin= "anonymous">
		<title>Crud practice</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
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
					      	<form>
					      		<div class="form-group">
					      			<label>Task Name</label>
					      			<input type = "text" required name = "task" class = "form-control">
					      		</div>

					      		<input type="submit" name="send" value="send" class="btn btn-success"> 
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
								<th scope="row">1</th>
								<td class = "col-md-10">Mark</td>
								<td><a href ="" class = "btn btn-success">Edit</a></td>
								<td><a href ="" class = "btn btn-danger">Delete</a></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td><a href ="" class = "btn btn-success">Edit</a></td>
								<td><a href ="" class = "btn btn-danger">Delete</a></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td><a href ="" class = "btn btn-success">Edit</a></td>
								<td><a href ="" class = "btn btn-danger">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>