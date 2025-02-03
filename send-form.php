<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Verify reCAPTCHA
    $recaptchaSecret = '6LcrHfcpAAAAAEFXYKim_vHLFp2goBYRfJiQaPbd';
    $recaptchaResponse = $_POST['recaptchaToken'];

    // Make a POST request to the Google reCAPTCHA API
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    
    // Decode the JSON response
    $responseData = json_decode($response);

    // Check if the verification was successful
    if ($responseData->success) {
        // Retrieve form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        $subject = "Lead from Website"; // Fixed subject

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Set mailer to use SMTP
            $mail->isSMTP();
            
            // Set SMTP host
            $mail->Host = 'smtp.gmail.com';
            
            // Set SMTP port (465 for SSL)
            $mail->Port = 465;
            
            // Enable SMTP authentication
            $mail->SMTPAuth = true;
            
            // Set SMTP security to SSL
            $mail->SMTPSecure = 'ssl';
            
            // SMTP username
            $mail->Username = 'info@techsters.in';
            
            // SMTP password
            $mail->Password = 'tykp akwf yrdm jcwj'; // Replace with your SMTP password
            
            // Set sender (From)
            $mail->setFrom('info@techsters.in', 'Techsters');
            
            // Set recipient (To)
            $mail->addAddress('swathi.p@techsters.in', 'Swathi');
            
                // Set recipient (To)
            $mail->addAddress('shivakumar.t@techsters.in', 'shiva');
            
            
                // Set recipient (To)
            $mail->addAddress('lavanya.g@techsters.in', 'Lavanya');

                 // Set recipient (To)
            $mail->addAddress('naveen.s@techsters.in', 'Naveen');

            
            // Set email format to HTML
            $mail->isHTML(true);
            
            // Set email subject
            $mail->Subject = $subject;
            
            // Set email body
            $mail->Body = "Name: $name <br> Email: $email <br> Phone: $phone <br> Message: $message";
            
            // Send email
            $mail->send();
            
            // Redirect to thank you page
            header("Location: thank_you.php");
            exit;
        } catch (Exception $e) {
            // Output error message
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        // Display reCAPTCHA error message
        echo 'reCAPTCHA verification failed. Please try again.';
        echo '<pre>';
        print_r($responseData); // Print the full response for debugging
        echo '</pre>';
    }
} else {
    echo 'Invalid request method.';
}
?>