<?php
require '../Modules/Projects.php';
require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "portfolio";
$titleSuffix = "";

switch ($params[1]) {

    case 'about':
        $titleSuffix = ' | about';
        
        // if (isset($_POST['send'])) {
        //     $recipient = "samdevo90@gmail.com";
        //     $subject = $_POST['subject'];
        //     $message = $_POST['message'];
        //     $sender = "From: " . $_POST['email'];
        //     if (empty($recipient) || empty($subject) || empty($message)) {
                
        //    echo'<div class="alert alert-danger text-center col-md-12">
        //         All input fields are required!
        //     </div>';
            
        //     }
        //     else{
        //         mail($recipient, $subject, $message, $sender);
        //        echo '<div class="alert alert-success text-center">
        //              Your mail sent successfully
        //         </div>';

        //     }
        // }
        include_once "../Templates/about.php";
        break;

    case 'Bloembinderij':
        $titleSuffix = ' | Bloembinderij';
        include_once "../Bloembinderij/index.php";
        break;

    case 'bloemen':
        $titleSuffix = ' | Bloemen';
        include_once "../Bloembinderij/bloemen.php";
        break;

    case 'over-ons':
        $titleSuffix = ' | over-ons';
        include_once "../Bloembinderij/over-ons.php";
        break;

        
    case 'contact':
        $titleSuffix = ' | contact';

        if (isset($_POST['send'])) {
            $recipient = "samdevo90@gmail.com";
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $sender = "From: " . $_POST['email'];
            if (empty($recipient) || empty($subject) || empty($message)) {
                
           echo'<div class="alert alert-danger text-center col-md-12">
                All input fields are required!
            </div>';
            
            }
            else{
                mail($recipient, $subject, $message, $sender);
               echo '<div class="alert alert-success text-center">
                     Your mail sent successfully
                </div>';

            }
        }
        include_once "../Templates/contact.php";
        break;
        

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
