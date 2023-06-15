<?php
    session_start();

    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    if(($_POST['device-type'] && $_POST['contact-form-name'] && $_POST['contact-form-surname'] && $_POST['contact-form-phone'] && $_POST['contact-form-email']) != null) {
        $deviceType = $_POST['device-type'];
        $name = $_POST['contact-form-name'];
        $surname = $_POST['contact-form-surname'];

        if(strlen($_POST['contact-form-phone']) != 9) {
            $_SESSION['inputError'] = "invalidPhone";
            header("Location:../../");
            exit();
        }
        else {
            $phone = $_POST['contact-form-phone'];
        }

        if(!filter_var($_POST['contact-form-email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['inputError'] = "invalidEmail";
            header("Location:../../");
            exit();
        }
        else {
            $email = $_POST['contact-form-email'];
        }

        //  LIFT
        if($deviceType == "lift") {
            if(($_POST["lift-type"] && $_POST["liftcapacity"] && $_POST["engine-type"] && $_POST["liftstops"] && $_POST["finishing-cabine"] && $_POST["finishing-door"] && $_POST["contact-form-input-selfset-1"]) != null) {
                $liftType = $_POST["lift-type"];
                $liftCapacity = (int)$_POST["liftcapacity"];
                $engineType = $_POST["engine-type"];
                $liftStops = (int)$_POST["liftstops"];
                $finishingCabine = $_POST["finishing-cabine"];
                $finishingDoor = $_POST["finishing-door"];
                $dimensionY = (int)$_POST["contact-form-input-selfset-1"];
                $readyDimensions = null;

                if($liftCapacity == 0 || $liftStops == 0 || $dimensionY == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                if($engineType == "linowy") {
                    if($_POST["contact-form-dimensions-electric"] != "other" ) {
                        $readyDimensions = $_POST["contact-form-dimensions-electric"];
                    }
                }
                else if ($engineType == "hydrauliczny") {
                    if($_POST["contact-form-dimensions-hydraulic"] != "other" ) {
                        $readyDimensions = $_POST["contact-form-dimensions-hydraulic"];
                    }
                }

                if($readyDimensions != null) {
                    switch($readyDimensions) {
                        case "1":
                            $dimensionX = 1650;
                            $dimensionZ = 1800;
                            break;
                        case "2":
                            $dimensionX = 1650;
                            $dimensionZ = 2000;
                            break;
                        case "3":
                            $dimensionX = 1650;
                            $dimensionZ = 2500;
                            break;
                        case "4":
                            $dimensionX = 1750;
                            $dimensionZ = 2500;
                            break;
                        case "5":
                            $dimensionX = 2200;
                            $dimensionZ = 2800;
                            break;
                        case "6":
                            if($engineType == "linowy") {
                                $dimensionX = 2300;
                                $dimensionZ = 3100;
                            }
                            else if($engineType == "hydrauliczny")
                            {
                                $dimensionX = 2500;
                                $dimensionZ = 3100;
                            }
                            break;
                    }
                }
                else if($readyDimensions == null) {
                    if(($_POST["contact-form-input-selfset-2"] && $_POST["contact-form-input-selfset-3"]) != null) {
                        $dimensionX = (int)$_POST["contact-form-input-selfset-2"];
                        $dimensionZ = (int)$_POST["contact-form-input-selfset-3"];
                    }
                    else {
                        $_SESSION['inputError'] = "notAll";
                        header("Location:../../");
                        exit();
                    }
                }

                if($dimensionX == 0 || $dimensionZ == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                if($_POST["contact-form-textarea"] != null) {
                    $otherInfo = $_POST["contact-form-textarea"];
                }
                else {
                    $otherInfo = "brak";
                }

                $deviceTypeShow = "winda";

                switch($liftType) {
                    case "osobowa":
                        $liftTypeShow = "osobowa";
                        break;
                    case "towarowa":
                        $liftTypeShow = "towarowa";
                        break;
                    case "towarowa-mala":
                        $liftTypeShow = "towarowa (mała)";
                        break;
                }

                switch($engineType) {
                    case "linowy":
                        $engineTypeShow = "elektryczny";
                        break;
                    case "hydrauliczny":
                        $engineTypeShow = "hydrauliczny";
                        break;
                }

                switch($finishingCabine) {
                    case "painted-plate":
                        $finishingCabineShow = "blacha malowana";
                        break;
                    case "stainless-steel":
                        $finishingCabineShow = "stal nierdzewna";
                        break;
                    case "laminate":
                        $finishingCabineShow = "laminat";
                        break;
                }

                switch($finishingDoor) {
                    case "painted-plate-door":
                        $finishingDoorShow = "blacha malowana";
                        break;
                    case "stainless-steel-door":
                        $finishingDoorShow = "stal nierdzewna";
                        break;
                }

                setupServerLift($mail);
                sendEmailLift($mail,$deviceTypeShow,$liftTypeShow,$engineTypeShow,$liftStops,$finishingCabineShow,$finishingDoorShow,$dimensionY,$dimensionX,$dimensionZ,$liftCapacity,$otherInfo,$name,$surname,$phone,$email);
            }
            else {
                $_SESSION['inputError'] = "notAll";
                header("Location:../../");
                exit();
            }
        }
        // Platform
        else if($deviceType == "platform") {
            if(($_POST["platformcapacity"] && $_POST["engine-type-platform"] && $_POST["shaft"] && $_POST["contact-form-input-selfset-1-platform"] && $_POST["platformstops"] && $_POST["finishing-cabine-platform"] && $_POST["finishing-door-platform"]) != null) {
                $capacity = (int)$_POST["platformcapacity"];
                $engineType = $_POST["engine-type-platform"];
                $shaft = $_POST["shaft"];
                $dimensionY = (int)$_POST["contact-form-input-selfset-1-platform"];
                $stops = (int)$_POST["platformstops"];
                $finishingCabine = $_POST["finishing-cabine-platform"];
                $finishingDoor = $_POST["finishing-door-platform"];
                $readyDimensions = null;

                if($capacity == 0 || $dimensionY == 0 || $stops == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                if($engineType == "hydraulic") {
                    if($_POST["contact-form-dimensions-hydraulic-platform"] != "other" ) {
                        $readyDimensions = $_POST["contact-form-dimensions-hydraulic-platform"];
                    }
                }
                else if ($engineType == "screw") {
                    if($_POST["contact-form-dimensions-screw-platform"] != "other" ) {
                        $readyDimensions = $_POST["contact-form-dimensions-screw-platform"];
                    }
                }

                if($readyDimensions != null) {
                    switch($readyDimensions) {
                        case "1":
                            $dimensionX = 1450;
                            $dimensionZ = 1560;
                            break;
                        case "2":
                            $dimensionX = 1150;
                            $dimensionZ = 1560;
                            break;
                        case "3":
                            $dimensionX = 1310;
                            $dimensionZ = 1520;
                            break;
                    }
                }
                else if($readyDimensions == null) {
                    if(($_POST["contact-form-input-selfset-2-platform"] && $_POST["contact-form-input-selfset-3-platform"]) != null) {
                        $dimensionX = (int)$_POST["contact-form-input-selfset-2-platform"];
                        $dimensionZ = (int)$_POST["contact-form-input-selfset-3-platform"];
                    }
                    else {
                        $_SESSION['inputError'] = "notAll";
                        header("Location:../../");
                        exit();
                    }
                }

                if($dimensionX == 0 || $dimensionZ == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                $deviceTypeShow = "platforma";

                switch($engineType) {
                    case "hydraulic":
                        $engineTypeShow = "hydrauliczny";
                        break;
                    case "screw":
                        $engineTypeShow = "śrubowy";
                        break;
                }

                switch($shaft) {
                    case "concrete":
                        $shaftShow = "żelbetowy";
                        break;
                    case "steel":
                        $shaftShow = "stalowy";
                        break;
                    case "without":
                        $shaftShow = "brak";
                }

                switch($finishingCabine) {
                    case "painted-plate":
                        $finishingCabineShow = "blacha malowana";
                        break;
                    case "stainless-steel":
                        $finishingCabineShow = "stal nierdzewna";
                        break;
                    case "laminate":
                        $finishingCabineShow = "laminat";
                        break;
                }

                switch($finishingDoor) {
                    case "painted-plate-door":
                        $finishingDoorShow = "blacha malowana";
                        break;
                    case "stainless-steel-door":
                        $finishingDoorShow = "stal nierdzewna";
                        break;
                }

                if($_POST["contact-form-textarea-platform"] != null) {
                    $otherInfo = $_POST["contact-form-textarea-platform"];
                }
                else {
                    $otherInfo = "brak";
                }

                setupServerPlatform($mail);
                sendEmailPlatform($mail,$deviceTypeShow,$engineTypeShow,$shaftShow,$stops,$finishingCabineShow,$finishingDoorShow,$dimensionY,$dimensionX,$dimensionZ,$capacity,$otherInfo,$name,$surname,$phone,$email);

            }
            else {
                $_SESSION['inputError'] = "notAll";
                header("Location:../../");
                exit();
            }
        }
        // Stairs
        else if($deviceType == "stairs") {
            if(($_POST["stairs-tilt"] && $_POST["stairs-raising"]) != null) {
                $tilt = $_POST["stairs-tilt"];
                $raising = (int)$_POST["stairs-raising"];

                if($raising == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                $deviceTypeShow = "schody ruchome";

                setupServerStairs($mail);
                sendEmailStairs($mail,$deviceTypeShow,$tilt,$raising,$name,$surname,$phone,$email);
            }
            else {
                $_SESSION['inputError'] = "notAll";
                header("Location:../../");
                exit();
            }
        }
        // Pavement
        else if($deviceType == "pavement") {
            if(($_POST["pavement-tilt"] && $_POST["pavement-raising"]) != null) {
                $tilt = $_POST["pavement-tilt"];
                $raising = (int)$_POST["pavement-raising"];

                if($raising == 0) {
                    $_SESSION['inputError'] = "mustNumber";
                    header("Location:../../");
                    exit();
                }

                $deviceTypeShow = "chodniki ruchome";

                setupServerPavement($mail);
                sendEmailPavement($mail,$deviceTypeShow,$tilt,$raising,$name,$surname,$phone,$email);
            }
            else {
                $_SESSION['inputError'] = "notAll";
                header("Location:../../");
                exit();
            }
        }
    }
    else {
        $_SESSION['inputError'] = "notAll";
        header("Location:../../");
        exit();
    }

    /*
     *  Mailer
     */
//  LIFT
    function setupServerLift($mail) {
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->Host = "mail1.titanaxe.com"; // Zależne od hostingu poczty
        $mail->SMTPDebug = 0;
        $mail->Port = 465 ; // Zależne od hostingu poczty, czasem 587
        $mail->SMTPSecure = 'ssl'; // Jeżeli ma być aktywne szyfrowanie SSL
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->Username = "formularz@skyglobe.net"; // login do skrzynki email często adres
        $mail->Password = "Paskuda2011!"; // Hasło do poczty
    }

    function sendEmailLift($mail,$deviceTypeShow,$liftTypeShow,$engineTypeShow,$liftStops,$finishingCabineShow,$finishingDoorShow,$dimensionY,$dimensionX,$dimensionZ,$liftCapacity,$otherInfo,$name,$surname,$phone,$email) {
        $mail->setFrom('formularz@skyglobe.net','Formularz kontaktowy'); // adres e-mail i nazwa nadawcy
        $mail->AddAddress("1karolek1@gmail.com"); // adres lub adresy odbiorców
        $mail->Subject = "Formularz kontaktowy: ". $deviceTypeShow; // Tytuł wiadomości
        $mail->Body .= "Typ urządzenia: $deviceTypeShow <br> Typ windy: $liftTypeShow <br> Typ silnika: $engineTypeShow <br> Liczba przystanków: $liftStops <br> Wykończenie kabiny: $finishingCabineShow <br> Wykończenie drzwi: $finishingDoorShow <br> Wysokość podnoszenia: $dimensionY mm <br> Szerokość: $dimensionX mm<br> Głębokość: $dimensionZ mm<br> Udźwig: $liftCapacity kg<br> Dodatkowe informacje: $otherInfo<br><br> Imie: $name <br> Nazwisko: $surname <br> Telefon: $phone <br> E-mail: $email";

        if(!$mail->Send()) {
            $_SESSION['messegeSended'] = "false";
        }
        else {
            $_SESSION['messegeSended'] = "true";
        }
        header('Location:../../');
    }

//  PLATFORM
    function setupServerPlatform($mail) {
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->Host = "mail1.titanaxe.com"; // Zależne od hostingu poczty
        $mail->SMTPDebug = 0;
        $mail->Port = 465 ; // Zależne od hostingu poczty, czasem 587
        $mail->SMTPSecure = 'ssl'; // Jeżeli ma być aktywne szyfrowanie SSL
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->Username = "formularz@skyglobe.net"; // login do skrzynki email często adres
        $mail->Password = "Paskuda2011!"; // Hasło do poczty
    }

    function sendEmailPlatform($mail,$deviceTypeShow,$engineTypeShow,$shaftTypeShow,$stops,$finishingCabineShow,$finishingDoorShow,$dimensionY,$dimensionX,$dimensionZ,$capacity,$otherInfo,$name,$surname,$phone,$email) {
        $mail->setFrom('formularz@skyglobe.net','Formularz kontaktowy'); // adres e-mail i nazwa nadawcy
        $mail->AddAddress("1karolek1@gmail.com"); // adres lub adresy odbiorców
        $mail->Subject = "Formularz kontaktowy: ". $deviceTypeShow; // Tytuł wiadomości
        $mail->Body .= "Typ urządzenia: $deviceTypeShow <br> Typ silnika: $engineTypeShow <br> Szyb: $shaftTypeShow <br> Liczba przystanków: $stops <br> Wykończenie kabiny: $finishingCabineShow <br> Wykończenie drzwi: $finishingDoorShow <br> Wysokość podnoszenia: $dimensionY mm <br> Szerokość: $dimensionX mm<br> Głębokość: $dimensionZ mm<br> Udźwig: $capacity kg<br> Dodatkowe informacje: $otherInfo<br><br> Imie: $name <br> Nazwisko: $surname <br> Telefon: $phone <br> E-mail: $email";

        if(!$mail->Send()) {
            $_SESSION['messegeSended'] = "false";
        }
        else {
            $_SESSION['messegeSended'] = "true";
        }
        header('Location:../../');
    }

// Stairs
    function setupServerStairs($mail) {
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->Host = "mail1.titanaxe.com"; // Zależne od hostingu poczty
        $mail->SMTPDebug = 0;
        $mail->Port = 465 ; // Zależne od hostingu poczty, czasem 587
        $mail->SMTPSecure = 'ssl'; // Jeżeli ma być aktywne szyfrowanie SSL
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->Username = "formularz@skyglobe.net"; // login do skrzynki email często adres
        $mail->Password = "Paskuda2011!"; // Hasło do poczty
    }

    function sendEmailStairs($mail,$deviceTypeShow,$tilt,$raising,$name,$surname,$phone,$email) {
        $mail->setFrom('mailer@hexacube.pl','Formularz kontaktowy'); // adres e-mail i nazwa nadawcy
        $mail->AddAddress("1karolek1@gmail.com"); // adres lub adresy odbiorców
        $mail->Subject = "Formularz kontaktowy: ". $deviceTypeShow; // Tytuł wiadomości
        $mail->Body .= "Typ urządzenia: $deviceTypeShow <br> Nachylenie: $tilt º <br> Wysokość podnoszenia: $raising cm <br><br> Imie: $name <br> Nazwisko: $surname <br> Telefon: $phone <br> E-mail: $email";

        if(!$mail->Send()) {
            $_SESSION['messegeSended'] = "false";
        }
        else {
            $_SESSION['messegeSended'] = "true";
        }
        header('Location:../../');
    }

// Pavement
    function setupServerPavement($mail) {
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->Host = "mail1.titanaxe.com"; // Zależne od hostingu poczty
        $mail->SMTPDebug = 0;
        $mail->Port = 465 ; // Zależne od hostingu poczty, czasem 587
        $mail->SMTPSecure = 'ssl'; // Jeżeli ma być aktywne szyfrowanie SSL
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->Username = "formularz@skyglobe.net"; // login do skrzynki email często adres
        $mail->Password = "Paskuda2011!"; // Hasło do poczty
    }

    function sendEmailPavement($mail,$deviceTypeShow,$tilt,$raising,$name,$surname,$phone,$email) {
        $mail->setFrom('mailer@hexacube.pl','Formularz kontaktowy'); // adres e-mail i nazwa nadawcy
        $mail->AddAddress("1karolek1@gmail.com"); // adres lub adresy odbiorców
        $mail->Subject = "Formularz kontaktowy: ". $deviceTypeShow; // Tytuł wiadomości
        $mail->Body .= "Typ urządzenia: $deviceTypeShow <br> Nachylenie: $tilt º <br> Wysokość podnoszenia: $raising cm <br><br> Imie: $name <br> Nazwisko: $surname <br> Telefon: $phone <br> E-mail: $email";

        if(!$mail->Send()) {
            $_SESSION['messegeSended'] = "false";
        }
        else {
            $_SESSION['messegeSended'] = "true";
        }
        header('Location:../../');
    }