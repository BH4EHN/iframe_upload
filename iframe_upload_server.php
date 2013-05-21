<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    echo "<script>parent.window.toggleModal(\"警告\", \"发生了未知错误\");parent.window.uploadOver();</script>";
} else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    $dir = "generic_upload/";
    if (file_exists($dir . $_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . " already exists.";
        echo "<script>parent.window.toggleModal(\"警告\", \"文件已存在\");parent.window.uploadOver();</script>";
    } else {
        if (is_writeable($dir)) {
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir . $_FILES["file"]["name"]);
            echo "Stored in: " . $dir . $_FILES["file"]["name"];
            echo "<script>parent.window.toggleModal(\"提示\", \"上传成功\");parent.window.uploadOver();</script>";
        } else {
            echo $dir ."is not writeable.";
            echo "<script>parent.window.toggleModal(\"警告\", \"服务器离家出走了\");parent.window.uploadOver();</script>";
        }
    }
}