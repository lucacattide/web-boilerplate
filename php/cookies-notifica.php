<?php
  $url = (isset($_SERVER['HTTPS']) ? 'https': 'http') .'://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];
  // TODO: Sostituire con indirizzo ad hoc
  $destinatario = 'l.cattide@email.it';
  $utente = $_SERVER['REMOTE_ADDR'];

  // Controllo Proxy
  if ($proxy) {
    $utente .= ' (Proxy: '. $proxy .')';
  }

  $headers = 'From: '. $destinatario ."\r\n".'Reply-To: '. $destinatario ."\r\n".'X-Mailer: PHP/'. @phpversion();
  $emailCorpo = 'Accettazione Cookie Policy:'."\n\n";
  $emailCorpo .= 'Sito Web: '. @strip_tags(clean_stringa($url)) ."\n";
  $emailCorpo .= 'Data: '. @date('d/m/Y \- \h\. H:i:s') ."\n";
  $emailCorpo .= 'Utente: '. @strip_tags(clean_stringa($utente));

  // TODO: Sostituire mittente
  @mail($destinatario, 'stack', $emailCorpo, $headers);

  /**
	* Funzione Formattazione Mail
	* @param string $stringa Stringa
	* @return string
	*/
	function clean_stringa($stringa) {
		$escluse = array('content-type', 'bcc:', 'to:', 'cc:', 'href');

		return @str_replace($escluse, '', $stringa);
	}
?>