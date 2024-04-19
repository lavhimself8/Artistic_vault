<?php

class Photo_detail extends Controller
{

	public function index($url_address = '')
	{
		$data['page_title'] = "Photo Details";

		$load_class = $this->loadModel("load_images");

		$data['image'] = $load_class->get_single_image($url_address);
		$data['random_images'] = $load_class->get_images();

		// No need to load image_class if you're not using it here

		if (is_array($data['random_images'])) {
			foreach ($data['random_images'] as $key => $row) {
				// Use the original image path directly
				$data['random_images'][$key]->image = $row->image;
			}
		}

		$this->view("catalog/Photo_detail", $data);
	}
}
