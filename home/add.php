  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script> $200 = jQuery.noConflict();</script>
    <script src="../include/cropit/dist/jquery.cropit.js"></script>

    <style>
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 250px;
        height: 250px;
      }
      .cropit-preview-image-container {
        cursor: move;
      }
      .image-size-label {
        margin-top: 10px;
      }
      input {
        display: block;
      }
      button[type="submit"] {
        margin-top: 10px;
      }
      #result {
        margin-top: 10px;
        width: 900px;
      }
      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
    </style>
 
 <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					UPLOAD AND CROP PHOTO
				</h2>
			</div>
			<div class="body">
    <form action="process.php?action=add" enctype="multipart/form-data" method="POST">
      <div class="image-editor">
        <input type="file" class="cropit-image-input">
        <div class="cropit-preview"></div>
        <div class="image-size-label">
          Resize image
        </div>
        <input type="range" class="cropit-image-zoom-input">
        <input type="hidden" name="username" value="<?=$username?>" />
        <input type="hidden" name="description" value="Description" />
        <input type="hidden" name="upload_file" class="hidden-image-data" />
		<button align="left" type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">CROP</button>
      </div>
    </form>

		</div>
	</div>
</div>
    <script>
      $200(function() {
        $200('.image-editor').cropit();
        $200('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $200('.image-editor').cropit('export');
          $200('.hidden-image-data').val(imageData);
          // Print HTTP request params
          var formValue = $200(this).serialize();
          $200('#result-data').text(formValue);
          // Prevent the form from actually submitting
          return true;
        });
      });
    </script>