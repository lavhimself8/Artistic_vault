<?php
namespace App\Models;
class FormProcessor
{
    public function processForm($POST, $DB)
    {
        $_SESSION['error'] = "";

        // Check if the form is submitted
        if (!empty($POST)) {
            // Your form validation logic here

            // Assuming you have a 'contacts' table with columns 'name', 'email', 'inquiry', and 'message'
            $query = "INSERT INTO contacts (name, email, inquiry, message) VALUES (:name, :email, :inquiry, :message)";

            try {
                $data = [
                    'name' => $POST['name'],
                    'email' => $POST['email'],
                    'inquiry' => $POST['inquiry'],
                    'message' => $POST['message'],
                ];

                $DB->write($query, $data);

                // Redirect to a success page or the same page without form data
                header("Location: " . ROOT . "index"); // Replace with your actual success page or desired URL
                exit;
            } catch (Exception $e) {
                echo "Error processing form data: " . $e->getMessage();
            }
        }
    }
}
