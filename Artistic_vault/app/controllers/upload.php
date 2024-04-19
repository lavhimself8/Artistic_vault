<?php

class Upload extends Controller
{


	public function image()
	{
		$data['page_title'] = "Upload Image";

		$user = $this->loadModel("user");
		//check if logged in
		if (!$result = $user->is_looged_in()) {
			header("Location: " . ROOT . "login");
			die;
		}

		if (isset($_FILES['file'])) {
			$model = $this->loadModel("Upload_file");
			$model->upload($_POST, $_FILES);

			// Redirect to the index page after successful upload
			header("Location: " . ROOT . "index");
			die;
		}

		$this->view("catalog/upload_image", $data);
	}
}
?>