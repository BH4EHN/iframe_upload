<!DOCTYPE html>
<html>
<head>
    <title>iFrame_upload</title>
</head>
<body>
    <iframe name="iframeUpload" style="display:none"></iframe>
    <script type="text/javascript">
        function uploadStart() {
            var submitBtn = document.GetElementById('submit');
			submitBtn.className = "disabled";
			submitBtn.innerText = "Uploading...";
        }
        function uploadOver() {
            var submitBtn = document.GetElementById('submit');
			submitBtn.className = "";
			submitBtn.innerText = "Upload";
        }
		function toggleModal(str) {
			alert(str);
		}
    </script>
	<div>
		<form name="form" method="post" action="generic_upload_server.php" enctype="multipart/form-data" target="iframeUpload">
		<label class="control-label">File: </label>
		<input type="file" id="file" name="file" />
		<button id="submit" onclick="uploadStart()">Upload</button>
		</form>
	</div>
</body>
</html>