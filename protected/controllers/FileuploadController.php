<?php

class FileuploadController extends Controller {

    public function actionUploadProgress() {
        // Assuming default values for session.upload_progress.prefix
        // and session.upload_progress.name:
        
        $s = $_SESSION['upload_progress_' . intval($_GET['PHP_SESSION_UPLOAD_PROGRESS'])];
        $progress = array(
            'lengthComputable' => true,
            'loaded' => $s['bytes_processed'],
            'total' => $s['content_length']
        );
        Response::ok(json_encode($progress));
    }

    public function actionUploadImages() {
        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();
    }

}
