
<?php include "core.php";?>

<!--<?php include('header.php') ; ?>-->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (if you installed via Composer)
// require 'vendor/autoload.php';

// If you downloaded the library, include these files:

require './PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// echo
//  require 'PHPMailer/src/SMTP.php';

// Collect the form data
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];
// $sdata =$_POST['submit'];
// $contactform     = htmlspecialchars($_POST['contactform']);



//start
  

//   if (isset($_POST['submit'])) {
//                   $date = date("Y-m-d");
//                   $name     = htmlspecialchars($_POST['name']);
//                   $Parentname = htmlspecialchars($_POST['parentname']);
//                   $childage = htmlspecialchars($_POST['childage']);
//                   $email     = htmlspecialchars($_POST['email']);
//                   $phone     = htmlspecialchars($_POST['phone']);
//                   $admission_grade = htmlspecialchars($_POST['class']);
//                   $grade = htmlspecialchars($_POST['grade']);
//                   $branch = htmlspecialchars($_POST['branch']);
//                   $subject     = htmlspecialchars($_POST['subject']);
//                   $message     = htmlspecialchars($_POST['message']);
//                   $preferred_callback_time = htmlspecialchars($_POST['callback']);
//                   $contactform     = htmlspecialchars($_POST['contactform']);
                
                    
                 
                       
//                     $add_sql = mysqli_query($connect, "INSERT INTO meru_contact_forms (name, parentname, childage, email, phone, admission_grade, grade, branch, subject, message, preferred_callback_time, createdate, from_type) 
//                                                                               VALUES ('$name', '$Parentname', '$childage', '$email', '$phone', '$admission_grade', '$grade', '$branch', '$subject', '$message', '$preferred_callback_time', '$date', '$contactform')");
//                     // echo '<meta http-equiv="refresh" content="0; url=contact.php">';
                        
//                     }

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);
// $location = htmlspecialchars($_POST['location']);

// start
 // Create the email body dynamically for non-empty data
    $emailBody = "";
    if (!empty($name)) {
        $emailBody .= "Name: $name<br>";
    }
     if (!empty($location)) {
        $emailBody .= "Location: $location<br>";
    }
    if (!empty($Parentname)) {
        $emailBody .= "Parent Name: $Parentname<br>";
    }
    if (!empty($childage)) {
        $emailBody .= "Child Age: $childage<br>";
    }
    if (!empty($email)) {
        $emailBody .= "Email: $email<br>";
    }
    if (!empty($phone)) {
        $emailBody .= "Phone: $phone<br>";
    }
    if (!empty($admission_grade)) {
        $emailBody .= "Admission Grade: $admission_grade<br>";
    }
    if (!empty($grade)) {
        $emailBody .= "Grade: $grade<br>";
    }
    if (!empty($branch)) {
        $emailBody .= "Branch: $branch<br>";
    }
    if (!empty($subject)) {
        $emailBody .= "Subject: $subject<br>";
    }
    if (!empty($message)) {
        $emailBody .= "Message: $message<br>";
    }
    if (!empty($preferred_callback_time)) {
        $emailBody .= "Preferred Callback Time: $preferred_callback_time<br>";
    }
    if (!empty($contactform)) {
        $emailBody .= "Form Type: $contactform<br>";
    }
// end
               
// end

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // $captcha = $_POST['g-recaptcha-response'];

    // if (is_null($captcha)) {
    //     echo "Invalid Captcha";
    //     return false;
    // } else {
    //     $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le3CfcpAAAAAIRWe9Ngq3W8hn7SvR_7nciv-nuR&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']));
    //     if ($res->success === false) {
    //         echo "Invalid Captcha";
    //         return false;
    //     }
    // }
    // Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'shivakumar.t@techsters.in';               // SMTP username
    $mail->Password   = 'wtxq rnrm hmmh rcov'; // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    // Recipients
    $mail->setFrom('bhavanirani.y@techsters.in', 'Mailer');
    $mail->addAddress('info@techsters.in', 'Techsters');     // Add a recipient
    $mail->addAddress('naveen@nayanagroup.com', 'Naveen');     // Add a recipient
    $mail->addAddress('pravalika.k@techsters.in', 'Pravallika');     // Add a recipient
    $mail->addAddress('madanmohan.a@techsters.in', 'Madan'); 
    $mail->addAddress('bhavanirani.y@techsters.in', 'Bhavani');// Add a recipient
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'New Lead Received'. $name;
    $mail->Body = $emailBody;
    // $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone <br>Floors :$subject <br>Construction Type: $construction_type<br>Message : $message";
    // $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

    $mail->send();
    
    echo '<meta http-equiv="refresh" content="0; url=https://techsters.in/best-E-commerce-website-design-in-hyderabad/thank_you.php">';
//   header('Location: https://rypaperarticles.in/meru-dynamic/thank-you.php');
  exit();

    // echo 'Message has been sent<br>';
    // echo '<img src="https://rypaperarticles.in/meru-dynamic/uploads/gallery/image_2y9s76erwuhfk4835tg01jd.png" alt="Image" />';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
