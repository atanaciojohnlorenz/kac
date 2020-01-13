<!DOCTYPE html>
<html>
<head>
	<title>Test News Add</title>
</head>
<body>
	<form class="form-horizontal" id="addNewsForm" action="php_action/addNews.php" method="POST" enctype="multipart/form-data"	>
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Equipment</h4>
	      </div>
	      <div class="modal-body">


	      	<div id="add-app-messages" ></div>
	        <div class="form-group">
	        	<label for="name" class="col-sm-3 control-label">Name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="name" placeholder="Name" name="name" autocomplete="off">
				      <span id="enameavail"></span>
				    </div>
	        </div> <!-- /form-group-->	

	        <div id="add-imp-messages" ></div>
	        <div class="form-group">
	        	<label for="description" class="col-sm-3 control-label">Description </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="description" placeholder="Description" name="description" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	

	        <div class="form-group">
	        	<label for="stock" class="col-sm-3 control-label">Stock</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	


	       <div class="form-group">
	        	<label for="eImage" class="col-sm-3 control-label">Image</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
					    <!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    <div class="kv-avatar center-block">					        
					        <input type="file" class="form-control img" id="eImage" name="eImage" multiple class="file-loading" style="width:auto;"  />
					    </div>
				      
				    </div>
	        </div> <!-- /form-group-->	 

	          
    	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-success" id="createEquipBtn" name="createEquipBtn" data-loading-text="Loading..." autocomplete="off">Add Equipment</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
</body>
</html>