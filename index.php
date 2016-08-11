<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Upload - Using Ajax</title>
<script src="js/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
	$('#upload').on('click', function() {
		var file_data = $('#pic').prop('files')[0];
		var form_data = new FormData();
		form_data.append('file', file_data);
		
		$.ajax({
				url			: 'upload.php', 	// point to server-side PHP script 
				dataType	: 'text',  			// what to expect back from the PHP script, if anything
				cache		: false,
				contentType	: false,
				processData	: false,
				data		: form_data,                         
				type		: 'post',
				success		: function(output){
					alert(output); 				// display response from the PHP script, if any
				}
		 });
		 $('#pic').val('');						/* Clear the file container */
	});
});
</script>
</head>

<body>
<input id="pic" type="file" name="pic" />
<button id="upload">Upload</button>
</body>
</html>
