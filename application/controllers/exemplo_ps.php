<?php

class Exemplo_ps extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->library('pagseguro');
        $this->load->helper('vendas_helper');
    }
    public function index()
    { 
    
        $venda =vendas($usuario,$products);
        $dados = array('venda' => $venda);
        $this->load->view('paginas/pagseguro', $dados);
    }

   
    
}


   //  $usuario = array(
       //      'id'         => 1,
       //      'nome'       => 'Fulano da Silva',
       //      'ddd'        => '21', // só números
       //      'telefone'   => '99887766', // só números
       //      'email'      => 'emaildo@cliente.com',
       //      'shippingType' => 3, //1=Encomenda normal (PAC), 2=SEDEX, 3=Tipo de frete não especificado.
       //      'cep'        => '24210445',      // só números
       //      'logradouro' => 'Rua do Cliente',
       //      'numero'     => '123',
       //      'compl'      => '456',
       //      'bairro'     => 'Meu bairro',
       //      'cidade'     => 'Minha cidade',
       //      'uf'         => 'RJ',
       //      'pais'       => 'BRA');
       // // insere produtos para botão PagSeguro
       //  $products[] = array(
       //      'id' => '999',
       //      'descricao' => 'Este é um produto de teste',
       //      'valor' => '1.56',
       //      'quantidade' => 1,
       //      'peso' => 0
       //  );
       //  $products[] = array(
       //      'id' => '777',
       //      'descricao' => 'Este é outro produto',
       //      'valor' => '6.70',
       //      'quantidade' => 2,
       //      'peso' => 0
       //    );