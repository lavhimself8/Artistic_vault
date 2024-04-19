<?php

class Upload_file
{

	public function upload($POST, $FILES)
	{

		$_SESSION['error'] = "";

		$allowed = ['image/jpeg', 'image/jpg', 'image/png'];

		//upload the file
		if ($FILES['file']['name'] != "" && $FILES['file']['error'] == 0) {

			if (in_array($FILES['file']['type'], $allowed)) {

			} else {

				$_SESSION['error'] = "Only Jpegs are allowed!";
			}
		}

		if ($_SESSION['error'] == "") {

			$folder = "uploads/";
			if (!file_exists($folder)) {
				mkdir($folder, 0777, true);
			}

			$destination = $folder . $FILES['file']['name'];

			move_uploaded_file($FILES['file']['tmp_name'], $destination);

			$arr['title'] = esc($_POST['title']);

			$arr['image'] = $destination;
			$arr['views'] = 0;
			$arr['url_address'] = get_random_string_max(60);

			$DB = new Database();
			$query = "INSERT INTO images (title, image, views, url_address, upload_time) 
          VALUES (:title,  :image, :views, :url_address, NOW())
          ON DUPLICATE KEY UPDATE image = image";


			$DB->write($query, $arr);

			header("Location: " . ROOT . "photos");
			die;

		}

	}
}