<?php

class Contact extends Controller
{
	public function index()
	{
		$data['page_title'] = "Contact";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$this->processForm($_POST);
		}

		$this->view("catalog/contact", $data);
	}

	private function processForm($postData)
	{
		$DB = new Database();

		// Your form validation logic here

		// Assuming you have a 'contacts' table with columns 'name', 'email', 'inquiry', and 'message'
		$query = "INSERT INTO contacts (name, email, inquiry, message) VALUES (:name, :email, :inquiry, :message)";

		try {
			$data = [
				'name' => $postData['name'],
				'email' => $postData['email'],
				'inquiry' => $postData['inquiry'],
				'message' => $postData['message'],
			];

			$DB->write($query, $data);

			// Redirect to a success page or the same page without form data
			header("Location: " . ROOT . "index");
			exit;
		} catch (Exception $e) {
			echo "Error processing form data: " . $e->getMessage();
		}
	}
}
