<?php 

function autoriza()
{
	$CI =& get_instance();
	$logar = $CI->session->userdata('usuario_logado');
	if (!$logar) {
		redirect('/');
	}else{
		$CI->session->set_flashdata('success', '<p class="alert alert-success"> Usuario Logado com sucesso</p>');
	}
}