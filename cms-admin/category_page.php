<?php 
include("class/auth.php");
include("plugin/plugin.php");
$plugin=new cmsPlugin();
$table="category_page"; ?>
$table_name="category_page"; ?>
<?php 
if(isset($_POST['create'])){
	extract($_POST);
	if(!empty($category_id) && !empty($_FILES['category_image']['name']) && !empty($page_content) && !empty($_FILES['category_banner']['name']))
	{ 
		if(!empty($_FILES['category_banner']['name']))
		{
			include('class/uploadImage_Class.php'); 
			$imgclassget=new image_class(); 
			$category_image=$imgclassget->upload_fiximage("upload","category_image","category_image_upload_".$table_name."_".time()); 
			$category_banner=$imgclassget->upload_fiximage("upload","category_banner","category_banner_upload_".$table_name."_".time()); 
			$insert=array('category_id'=>$category_id,'category_image'=>$category_image,'page_content'=>$page_content,'category_banner'=>$category_banner,'date'=>date('Y-m-d'),'status'=>1);
		}
		else
		{
			$category_image = "";
			$category_banner = "";
		}
		if($obj->insert($table,$insert)==1)
		{
			$plugin->Success("Successfully Saved",$obj->filename());
		}
		else 
		{
			$plugin->Error("Failed",$obj->filename());
		}
	}
	else 
	{
		$plugin->Error("Fields is Empty",$obj->filename());
	}   
}
elseif(isset($_POST['update'])) 
{
	extract($_POST);
	if(!empty($category_id) && !empty($page_content))
		{$updatearray=array("id"=>$id);
	
	$category_image=$ex_category_image;
	$category_banner=$ex_category_banner;
	
	if(!empty($_FILES['category_image']['name']))
	{
		include('class/uploadImage_Class.php'); 
		$imgclassget=new image_class(); 
		
		$category_image_1=$imgclassget->upload_fiximage("upload","category_image","category_image_upload_".$table_name."_".time());
		$category_banner_1=$imgclassget->upload_fiximage("upload","category_banner","category_banner_upload_".$table_name."_".time());
		
		$category_image=$category_image_1;
		$category_banner=$category_banner_1;
		
		@unlink("upload/".$ex_category_image);
		@unlink("upload/".$ex_category_banner);
	}
	elseif(!empty($_FILES['category_image']['name']))
	{
		include('class/uploadImage_Class.php'); 
		$imgclassget=new image_class(); 
		$category_image_1=$imgclassget->upload_fiximage("upload","category_image","category_image_upload_".$table_name."_".time());

		$category_image=$category_image_1;
		@unlink("upload/".$ex_category_image);	
	}
	elseif(!empty($_FILES['category_banner']['name']))
	{
		include('class/uploadImage_Class.php'); 
		$imgclassget=new image_class(); 
		$category_banner=$imgclassget->upload_fiximage("upload","category_banner","category_banner_upload_".$table_name."_".time());

		$category_banner=$category_banner_1;
		@unlink("upload/".$ex_category_banner);	
	}

	
	$upd2=array('category_id'=>$category_id,'category_image'=>$category_image,'page_content'=>$page_content,'category_banner'=>$category_banner,'date'=>date('Y-m-d'),'status'=>1);

	$update_merge_array=array_merge($updatearray,$upd2);
	
	if($obj->update($table,$update_merge_array)==1)
	{ 
		$plugin->Success("Successfully Updated",$obj->filename());
	} 
	else 
	{ 
		$plugin->Error("Failed",$obj->filename()); 
	}}}
	elseif(isset($_GET['del'])=="delete") 
	{
		$delarray=array("id"=>$_GET['id']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'category_banner'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
		{ 
			$plugin->Success("Successfully Delete",$obj->filename());  
		} 
		else 
		{ 
			$plugin->Error("Failed",$obj->filename()); 
		}
	}
	?><!doctype html>
	<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
	<!--[if gt IE 8]> <html> <![endif]-->
	<!--[if !IE]><!--><html><!-- <![endif]-->
	<head>
		<?php 
		echo $plugin->softwareTitle();
		echo $plugin->TableCss(); 
		echo $plugin->KendoCss(); 
		echo $plugin->FileUploadCss();
		?>
	</head>
	<body class="">
		<?php include('include/topnav.php'); include('include/mainnav.php'); ?>
		




		<div id="content">
			<h1 class="content-heading bg-white border-bottom">Category Page</h1>
			<div class="innerAll bg-white border-bottom">
				<ul class="menubar">
					<li class="active"><a href="#">Create New Category Page</a></li>
					<li><a href="category_page_data.php">Category Page List</a></li>
				</ul>
			</div>
			<div class="innerAll spacing-x2">
				<?php echo $plugin->ShowMsg(); ?>
				<!-- Widget -->

				<!-- Widget -->
				<div class="widget widget-inverse" >
					<?php 
					if(isset($_GET['edit']))
					{
						?>
						<!-- Widget heading -->
						<div class="widget-head">
							<h4 class="heading">Update/Change - Category Page</h4>
						</div>
						<!-- // Widget heading END -->
						
						<div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
							<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
							<label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>
							
							<div class='col-sm-6'>
								<!-- <input type='text' id='form-field-1' name='category_id' placeholder='Category ID'  value='<?php //echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_id"); ?>'  class='form-control' /> -->
								<select name='category_id' class='form-control'>
									<option>Select A Category Name</option>
									<?php
									$category_name_id = $obj->SelectAllByVal($table, "id", $_GET['edit'], "category_id");
									$category_name = $obj->SelectAll("category");
									if (!empty($category_name)) {
										foreach ($category_name as $name):
											?>
										<option <?php if ($category_name_id == $name->id) { ?>selected="selected"<?php } ?> value="<?php echo $name->id; ?>"><?php echo $name->name; ?></option>
										<?php
										endforeach;
									}
									?>
								</select>
							</div>
						</div><div class='form-group'>
						<label  for="inputEmail3" class="col-sm-2 control-label"> Category Image </label>
						
						<div class='col-sm-3'>
							<!-- <input type='file' id='id-input-file-1' name='category_image' placeholder='Category Image' class='form-control' /> -->
							<?php 
							$category_image = $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_image");
							echo $plugin->FileUploadBox("1",$category_image,"category_image");
							?>
						</div>
					</div><div class='form-group'>
					<label  for="inputEmail3" class="col-sm-2 control-label"> Page Content </label>
					
					<div class='col-sm-9'>
						<textarea id='editor' name='page_content' placeholder='Page Content' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"page_content"); ?></textarea>
						<script>
							$(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor").kendoEditor({ resizable: {
									                    	content: true,
									                    	toolbar: true
									                    }});
									                });
									            </script>
									        </div>
									    </div><div class='form-group'>
									    <label  for="inputEmail3" class="col-sm-2 control-label"> Category Banner </label>
									    
									    <div class='col-sm-3'>
									    	<!-- <input type='file' id='id-input-file-1' name='category_banner' placeholder='Category Banner' class='form-control' /> -->
									    	<?php 
									    	$category_banner = $obj->SelectAllByVal($table,"id",$_GET['edit'],"category_banner");
									    	echo $plugin->FileUploadBox("1",$category_banner,"category_banner");
									    	?>
									    </div>
									</div><div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button  onclick="javascript:return confirm('Do You Want change/update These Record?')"  type="submit" name="update" class="btn btn-primary">Save Change</button>
										<button type="reset" class="btn btn-danger">Reset</button>
									</div>
								</div>
							</form>
						</div>
						<?php }else{ ?>
						<!-- Widget heading -->
						<div class="widget-head">
							<h4 class="heading">Create New Category Page</h4>
						</div>
						<!-- // Widget heading END -->
						
						<div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
							<label  for="inputEmail3" class="col-sm-2 control-label"> Category ID </label>
							
							<div class='col-sm-6'>
								<!-- <input type='text' id='form-field-1' name='category_id' placeholder='Category ID' class='form-control' /> -->
								<select name='category_id' class='form-control'>
									<option>Select A Category Name</option>
									<?php
									$category = $obj->FlyQuery("select * from category");
									if(!empty($category)){
										foreach ($category as $cate) {
											?>
											<option value="<?= $cate->id?>"><?= $cate->name?></option>
											<?php
										}
									}
									?>
								</select>
							</div>
						</div><div class='form-group'>
						<label  for="inputEmail3" class="col-sm-2 control-label"> Category Image </label>
						
						<div class='col-sm-3'>
							<!-- <input type='file' id='id-input-file-1' name='category_image' placeholder='Category Image' class='form-control' /> -->
							<?php 
							echo $plugin->FileUploadBox("0","","category_image");
							?>
						</div>
					</div><div class='form-group'>
					<label  for="inputEmail3" class="col-sm-2 control-label"> Page Content </label>
					
					<div class='col-sm-9'>
						<textarea id='editor' name='page_content' placeholder='Page Content' class='form-control'></textarea>
						<script>
							$(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor").kendoEditor({ resizable: {
									                    	content: true,
									                    	toolbar: true
									                    }});
									                });
									            </script>
									        </div>
									    </div><div class='form-group'>
									    <label  for="inputEmail3" class="col-sm-2 control-label"> Category Banner </label>
									    
									    <div class='col-sm-3'>
									    	<!-- <input type='file' id='id-input-file-1' name='category_banner' placeholder='Category Banner' class='form-control' /> -->
									    	<?php 
									    	echo $plugin->FileUploadBox("0","","category_banner");
									    	?>
									    </div>
									</div><div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit"   onclick="javascript:return confirm('Do You Want Create/save These Record?')"  name="create" class="btn btn-info">Save</button>
										<button type="reset" class="btn btn-danger">Reset</button>
									</div>
								</div>
							</form>
						</div>
						<?php } ?>
					</div>
					<!-- // Widget END -->


					
					
					<!-- // Widget END -->
				</div>
			</div>
			<!-- // Content END -->

			<div class="clearfix"></div>
			<!-- // Sidebar menu & content wrapper END -->
			<?php 
			echo $plugin->TableJs(); 
			echo $plugin->KendoJS();
			echo $plugin->FileUploadJS();
			?>
		</body>
		</html>