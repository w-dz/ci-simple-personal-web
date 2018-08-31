<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function sendemail()
	{
		$remitente = $this->input->post('nombreContacto');
		$mensaje = $this->input->post('mensajeContacto');
		$email = $this->input->post('email');
		$asunto = $this->input->post('asuntoContacto');

    $this->email->from('correo@ejemplo.com', $remitente);
    $this->email->to('correo@ejemplo.com');
    $this->email->subject($asunto);
    $this->email->message($mensaje);
    $email = $this->email->send();

		if ($email == true) {
			echo "ok";
		}
	}
}
