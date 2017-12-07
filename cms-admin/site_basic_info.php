<?php 
		include("class/auth.php");
		include("plugin/plugin.php");
		$plugin=new cmsPlugin();
		$table="site_basic_info";
		$table_name="site_basic_info";
		 ?>
		<?php 
		if(isset($_POST['create'])){
			extract($_POST);
			if(!empty($site_name) && !empty($_FILES['top_logo']['name']) && !empty($_FILES['logo']['name']) && !empty($email) && !empty($phone) && !empty($address))
			{ 
				 if(!empty($_FILES['top_logo']['name']) && !empty($_FILES['logo'])){
				include('class/uploadImage_Class.php'); 
				$imgclassget=new image_class(); 
				$top_logo=$imgclassget->upload_fiximage("upload","top_logo","top_logo_upload_".$table_name."_".time());  
				$logo=$imgclassget->upload_fiximage("upload","logo","logo_upload_".$table_name."_".time());  

				$insert=array('site_name'=>$site_name,'top_logo'=>$top_logo,'logo'=>$logo,'email'=>$email,'phone'=>$phone,'address'=>$address,'keywords'=>$keywords,'description'=>$description,'date'=>date('Y-m-d'),'status'=>1);
				}
				else
				{
                    $top_logo = "";
                    $logo = "";
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
			extract($_POST);if(!empty($site_name) && !empty($email) && !empty($phone) && !empty($address))
			{$updatearray=array("id"=>$id);


				$top_logo=$ex_top_logo;
				$logo=$ex_logo;
				if(!empty($_FILES['logo']['name']) && !empty($_FILES['top_logo']['name']))
					{
						include('class/uploadImage_Class.php'); 
						$imgclassget=new image_class(); 
						$logo_1=$imgclassget->upload_fiximage("upload","top_logo","top_logo_upload_".$table_name."_".time());
						$logo_2=$imgclassget->upload_fiximage("upload","logo","logo_upload_".$table_name."_".time());
						
						$top_logo=$logo_1;
						$logo=$logo_2;
						@unlink("upload/".$ex_top_logo);
						@unlink("upload/".$ex_logo);
					}elseif(!empty($_FILES['top_logo']['name']))
					{
						include('class/uploadImage_Class.php'); 
						$imgclassget=new image_class(); 
						$logo_1=$imgclassget->upload_fiximage("upload","top_logo","top_logo_upload_".$table_name."_".time());

						$top_logo=$logo_1;
						@unlink("upload/".$ex_top_logo);	
					}
					elseif(!empty($_FILES['logo']['name']))
					{
						include('class/uploadImage_Class.php'); 
						$imgclassget=new image_class(); 
						$logo_2=$imgclassget->upload_fiximage("upload","logo","logo_upload_".$table_name."_".time());
						
						$logo=$logo_2;
						@unlink("upload/".$ex_logo);
					}



					$upd2=array('site_name'=>$site_name,'top_logo'=>$top_logo,'logo'=>$logo,'email'=>$email,'phone'=>$phone,'address'=>$address,'keywords'=>$keywords,'description'=>$description,'date'=>date('Y-m-d'),'status'=>1);
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
			$delarray=array("id"=>$_GET['id']);$photolink=$obj->SelectAllByVal($table,'id',$_GET['id'],'logo'); @unlink("upload/".$photolink);if($obj->delete($table,$delarray)==1)
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
        	<h1 class="content-heading bg-white border-bottom">Site Basic Info</h1>
            <div class="innerAll bg-white border-bottom">
                <ul class="menubar">
                    <li class="active"><a href="#">Create New Site Basic Info</a></li>
                    <li><a href="site_basic_info_data.php">Site Basic Info List</a></li>
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
                                <h4 class="heading">Update/Change - Site Basic Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form">
								<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_name' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"site_name"); ?>' placeholder='Site Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Top Logo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='top_logo' placeholder='Top Logo' class='form-control' /> -->
												<?php 
                                                    $top_logo = $obj->SelectAllByVal($table,"id",$_GET['edit'],"top_logo");
                                                    echo $plugin->FileUploadBox("1",$top_logo,"top_logo");
                                                ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Logo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='logo' placeholder='Logo' class='form-control' /> -->
												<?php 
                                                    $logo = $obj->SelectAllByVal($table,"id",$_GET['edit'],"logo");
                                                    echo $plugin->FileUploadBox("1",$logo,"logo");
                                                ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='email' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"email"); ?>' placeholder='Email' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='phone' value='<?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"phone"); ?>' placeholder='Phone' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Address </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='address' placeholder='Address' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"address"); ?></textarea>
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
											<label  for="inputEmail3" class="col-sm-2 control-label"> Keywords </label>
		
											<div class='col-sm-9'>
												<textarea id='editor1' name='keywords' placeholder='Keywords' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"keywords"); ?></textarea>
												<script>
									                $(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor1").kendoEditor({ resizable: {
									                        content: true,
									                        toolbar: true
									                    }});
									                });
									            </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Description </label>
		
											<div class='col-sm-9'>
												<textarea id='editor2' name='description' placeholder='Description' class='form-control'><?php echo $obj->SelectAllByVal($table,"id",$_GET['edit'],"description"); ?></textarea>
												<script>
									                $(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor2").kendoEditor({ resizable: {
									                        content: true,
									                        toolbar: true
									                    }});
									                });
									            </script>
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
                                <h4 class="heading">Create New Site Basic Info</h4>
                            </div>
                            <!-- // Widget heading END -->
							
                            <div class="widget-body"><form enctype='multipart/form-data' class="form-horizontal" method="post" action="" role="form"><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Site Name </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='site_name' placeholder='Site Name' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Top Logo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='top_logo' placeholder='Top Logo' class='form-control' /> -->
												<?php 
                                                    echo $plugin->FileUploadBox("0","","top_logo");
                                                ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Logo </label>
		
											<div class='col-sm-3'>
												<!-- <input type='file' id='id-input-file-1' name='logo' placeholder='Logo' class='form-control' /> -->
												<?php 
			                                        echo $plugin->FileUploadBox("0","","logo");
			                                    ?>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Email </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='email' placeholder='Email' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Phone </label>
		
											<div class='col-sm-9'>
												<input type='text' id='form-field-1' name='phone' placeholder='Phone' class='form-control' />
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Address </label>
		
											<div class='col-sm-9'>
												<textarea id='editor' name='address' placeholder='Address' class='form-control'></textarea>
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
											<label  for="inputEmail3" class="col-sm-2 control-label"> Keywords </label>
		
											<div class='col-sm-9'>
												<textarea id='editor1' name='keywords' placeholder='Keywords' class='form-control'></textarea>
												<script>
									                $(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor1").kendoEditor({ resizable: {
									                        content: true,
									                        toolbar: true
									                    }});
									                });
									            </script>
											</div>
										</div><div class='form-group'>
											<label  for="inputEmail3" class="col-sm-2 control-label"> Description </label>
		
											<div class='col-sm-9'>
												<textarea id='editor2' name='description' placeholder='Description' class='form-control'></textarea>
												<script>
									                $(document).ready(function() {
									                    // create Editor from textarea HTML element with default set of tools
									                    $("#editor2").kendoEditor({ resizable: {
									                        content: true,
									                        toolbar: true
									                    }});
									                });
									            </script>
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
        <?php include('include/footer.php'); ?>
        <!-- // Footer END -->
    </div>
    <!-- // Main Container Fluid END -->
    <!-- Global -->
    
<?php 
        echo $plugin->TableJs(); 
        echo $plugin->KendoJS();
        echo $plugin->FileUploadJS();
    ?>
    </body>
</html>