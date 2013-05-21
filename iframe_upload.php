<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <title></title>
</head>
<body>
<div class="container">
    <iframe name="iframeUpload" style="display:none"></iframe>
    <script type="text/javascript">
        function toggleModal(title, body) {
            document.getElementById('modalLabel').innerHTML = title;
            document.getElementById('modalBody').innerHTML = body;
            $('#modal').modal('toggle');
        }
        function uploadStart() {
            $("#submit").button("loading");
        }
        function uploadOver() {
            $("#submit").button("reset");
        }
    </script>
    <div id="modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="modalLabel">信息</h3>
        </div>
        <div class="modal-body">
            <p id="modalBody"></p>
        </div>
        <div class="modal-footer" id="modal-footer-div">
            <button class="btn" data-dismiss="modal" aria-hidden="true" id="modal-footer">关闭</button>
        </div>
    </div>
    <form class="form-horizontal" name="form" method="post" action="generic_upload_server.php" enctype="multipart/form-data" target="iframeUpload">
        <div class="control-group">
            <label class="control-label">File: </label>
            <div class="controls">
                <input type="file" id="file" name="file" />
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-primary" id="submit" data-loading-text="uploading…" onclick="uploadStart()">Upload</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>