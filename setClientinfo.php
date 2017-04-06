<?php
include_once("include/iheader.php");
if(isset($_POST["save"])) {
    $data['name'] = $_POST['givenNimi'];
    $data['email'] = $_POST['givenEmail'];
    $_SESSION['Name'] = $_POST['givenNimi'];
    $_SESSION['Mail'] = $_POST['givenEmail'];
    
    
    try {
            $stm = $DBH->prepare("INSERT into Asiakas (Nimi, Email) VALUES(:name, :email);");
             if ($stm->execute($data)) {
                //$_SESSION['name'] = $data['name'];
                //$_SESSIN['email'] = $data['email'];
                $_SESSION['message'] = "Nyt voit ostaa lipun!";
                $_SESSION['registered'] = 'yes';
                // $_SESSION['loggedIn] = 'yes'; // jos rekisteröinti onnistunut -> kirjautunut suoraan sisään
                redirect("print.php");
            } else {
                $_SESSION['message'] = "Lipun ostaminen ei onnistu.";
                redirect("index.php");
            }
        } catch(PDOException $e) {
            $_SESSION['message'] = "error"; //$e.getMessage()
            redirect("index.php");
        }
    }
?>