 <?php
 
include "koneksi.php";
?>
 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
	   

  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="admin.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Data Portofolio</span>
				</h2>
		    </div>
		<!--//banner-->
		
				<!--graph-->
				<link rel="stylesheet" href="css/graph.css">
				<!--//graph-->
							<script src="js/jquery.flot.js"></script>
		<!--content-->
	<div class="content-top">
		<div class="col-md-12 ">
				<!---start-chart---->
				<!----->
			<div class="grid-form">
				
									
				<div class="grid-form1">
				 	<h3 id="forms-example" class="" style="margin-bottom: 0px;">Add Portofolio</h3>
					<form name="input_data" action="proses-add-portofolio.php" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="exampleInputEmail1">Judul Portofolio</label>
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Judul Portofolio">
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">Pilih Gambar</label>
							<input type="file" id="gambar" name="gambar">
							<p class="help-block">Ukuran Gambar 800x500 px.</p>
						</div>
  
  
			<div class="form-group">
				<button class="btn-success btn" name="submit" style="margin-right: 5em;">Submit</button>
				<button onclick="history.back();" type="button" class="btn-danger btn">Back</button>
			</div>
</form>



<script>
		 CKEDITOR.replace( 'productDesc', {
				toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike', 'Image', 'NumberedList','BulletedList', 'Table', 'Subscript', 'Superscript', '-', 'RemoveFormat', 'SpecialChar'] },
				{name: 'links', items: ['Link', 'Unlink', 'CreateDiv']}
				],
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			});
</script>


</div>
	
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!---->
	
  
		
		<!----->
		