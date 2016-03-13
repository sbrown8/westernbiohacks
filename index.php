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
					  <div id="trt1">
					  <div class="row">
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="fwd" id="trt1fwd1">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Forward" name="submit">
					  </div>
					  </div>
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="rev" id="trt1rev">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Reverse" name="submit">
					  </div>
					  </div>
					  </div>
					  </div>
					  <button class="btn btn-default" id="trt1-more-files" onClick="addFASQ("trt1");">Add more FASTQ files</button>
					  <div class="form-group">
					    <label for="treatment2">Treatment Group 2:</label>
					    <input type="text" class="form-control" id="treatment2">
					  </div>
					  <div id="trt2">
					  <div class="row">
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="fwd" id="trt2fwd1">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Forward" name="submit">
					  </div>
					  </div>
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="rev" id="trt2rev">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Reverse" name="submit">
					  </div>
					  </div>
					  </div>
					  </div>
					  <button class="btn btn-default" id="trt2-more-files" onClick="addFASQ("trt2");">Add more FASTQ files</button>
					  <br>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		<div class="col-md-3"></div>
		</div>
		
		<script>
			function addFASQ(divId){
				var div = document.getElementById(divId);
				var fasqField = '<div class="row">
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="fwd">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Forward" name="submit">
					  </div>
					  </div>
					  <div class="col-md-6">
					  <div class="form-group">
					  	<input type="file" name="rev">
						</div>
					<div class="form-group">
						<input class="btn btn-default" type="submit" value="Upload Reverse" name="submit">
					  </div>
					  </div>
					  </div>';
				div.innerHTML = div.innerHTML + fasqField;
			}
		</script>
        <?php:
        		
		
        ?>
    </body>
</html>