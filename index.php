<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BioHack Project</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8"><img class="center-block" src="img/header_arrow0.png"/></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="upload-or-results">	
					<form role="form" action="uploadResults.php" method="post" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="treatment1">Treatment Group 1:</label>
					    <input type="text" class="form-control" id="treatment1">
					  </div>
					  <div class="form-group">
					  	<input class="btn btn-default" type="file" name="fwd" id="trt1fwd1">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Forward" name="submit">
					  </div>
					  <div class="form-group">
					    <label for="treatment2">Treatment Group 2:</label>
					    <input type="text" class="form-control" id="treatment2">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		<div class="col-md-3"></div>
		</div>
        <?php:
        		
		
        ?>
    </body>
</html>