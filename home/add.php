
<form >

</form>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="process.php?action=add" method="POST" enctype="multipart/form-data">
                                <label>Upload Photo</label>
								<input type="file" name="upload_file"/><br></br>
                                <label for="caption">Caption</label>
                                <div class="form-group">
                                    <div class="form-line">
										<textarea rows="4" class="form-control no-resize" name="description" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
								<input type="hidden" name="username" value="<?=$username;?>">
								
								<button type="submit" class="btn btn-primary m-t-15 waves-effect">POST</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			
			