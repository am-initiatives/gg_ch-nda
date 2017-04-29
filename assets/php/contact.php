<?php

	// Mail settings
	$to = "merlet.thomas@gmail.com";
	$subject = "Test Site NDA";

	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Name: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $_POST["email"])) {

			$result = array(
				"message" => "Votre message a bien été envoyé.",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message" => "Désolé, l'envoi de votre message n'a pas abouti.",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>
