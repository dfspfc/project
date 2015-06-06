<?php

namespace Lojista\Form;

use Zend\Form\Form;
use Lojista\Form\InputFilter\Lojista as LojistaInputFilter;

class Lojista extends Form
{
	public function __construct()
	{
		parent::__construct('lojista');

		$this->setInputFilter(new LojistaInputFilter());

		$this->setAttribute('method', 'post');

		$this->add(
			array(
				'name' => 'id',
				'attributes' => array(
					'type' => 'hidden'
				)
			)
		);

		$this->add(
			array(
				'name' => 'razaoSocial',
				'options' => array(
					'type' => 'text',
					'label' => 'Razão Social: '
				),
				'attributes' => array(
					'id' => 'razaoSocial'
				)
			)
		);

		$this->add(
			array(
				'name' => 'nomeFantasia',
				'options' => array(
					'type' => 'text',
					'label' => 'Nome Fantasia: '
				),
				'attributes' => array(
					'id' => 'razaoSocial'
				)
			)
		);

		$this->add(
			array(
				'name' => 'abertura',
				'options' => array(
					'type' => 'text',
					'label' => 'Data de Abertura: '
				),
				'attributes' => array(
					'id' => 'abertura'
				)
			)
		);

		$this->add(
			array(
				'name' => 'cnpj',
				'options' => array(
					'type' => 'text',
					'label' => 'CNPJ: '
				),
				'attributes' => array(
					'id' => 'cnpj'
				)
			)
		);

		$this->add(
			array(
				'name' => 'inscricaoEstadual',
				'options' => array(
					'type' => 'text',
					'label' => 'Inscrição Estadual: '
				),
				'attributes' => array(
					'id' => 'text'
				)
			)
		);

		// endereco
		$this->add(
			array(
				'name' => 'logradouro',
				'options' => array(
					'type' => 'text',
					'label' => 'Logradouro: '
				),
				'attributes' => array(
					'id' => 'logradouro'
				)
			)
		);

		$this->add(
			array(
				'name' => 'numero',
				'options' => array(
					'type' => 'text',
					'label' => 'Número: '
				),
				'attributes' => array(
					'id' => 'numero'
				)
			)
		);

		$this->add(
			array(
				'name' => 'bairro',
				'options' => array(
					'type' => 'text',
					'label' => 'Bairro: '
				),
				'attributes' => array(
					'id' => 'bairro'
				)
			)
		);

		$this->add(
			array(
				'name' => 'estado',
				'options' => array(
					'type' => 'text',
					'label' => 'Estado: '
				),
				'attributes' => array(
					'id' => 'estado'
				)
			)
		);

		$this->add(
			array(
				'name' => 'cidade',
				'options' => array(
					'type' => 'text',
					'label' => 'Cidade: '
				),
				'attributes' => array(
					'id' => 'cidade'
				)
			)
		);

				$this->add(
			array(
				'name' => 'cep',
				'options' => array(
					'type' => 'text',
					'label' => 'CEP: '
				),
				'attributes' => array(
					'id' => 'cep'
				)
			)
		);

		// Contato
		$this->add(
			array(
				'name' => 'telefone1',
				'options' => array(
					'type' => 'text',
					'label' => 'Telefone 1: '
				),
				'attributes' => array(
					'id' => 'telefone1'
				)
			)
		);

		$this->add(
			array(
				'name' => 'telefone2',
				'options' => array(
					'type' => 'text',
					'label' => 'Telefone 2: '
				),
				'attributes' => array(
					'id' => 'telefone2'
				)
			)
		);

		$this->add(
			array(
				'name' => 'celular',
				'options' => array(
					'type' => 'text',
					'label' => 'Celular: '
				),
				'attributes' => array(
					'id' => 'celular'
				)
			)
		);

		$this->add(
			array(
				'name' => 'email',
				'options' => array(
					'type' => 'text',
					'label' => 'Email: '
				),
				'attributes' => array(
					'id' => 'email'
				)
			)
		);

		$this->add(
			array(
				'name' => 'site',
				'options' => array(
					'type' => 'text',
					'label' => 'Site: '
				),
				'attributes' => array(
					'id' => 'site'
				)
			)
		);

		$this->add(
			array(
				'name' => 'responsavel',
				'options' => array(
					'type' => 'text',
					'label' => 'Responsavel: '
				),
				'attributes' => array(
					'id' => 'responsavel'
				)
			)
		);

		// dados bancarios

		$this->add(
			array(
				'name' => 'banco1',
				'options' => array(
					'type' => 'text',
					'label' => 'Banco 1: '
				),
				'attributes' => array(
					'id' => 'banco1'
				)
			)
		);

		$this->add(
			array(
				'name' => 'agencia1',
				'options' => array(
					'type' => 'text',
					'label' => 'Agencia 1: '
				),
				'attributes' => array(
					'id' => 'agencia1'
				)
			)
		);	

		$this->add(
			array(
				'name' => 'telefoneBanco1',
				'options' => array(
					'type' => 'text',
					'label' => 'Telefone 1: '
				),
				'attributes' => array(
					'id' => 'telefoneBanco1'
				)
			)
		);

		$this->add(
			array(
				'name' => 'banco2',
				'options' => array(
					'type' => 'text',
					'label' => 'Banco 2: '
				),
				'attributes' => array(
					'id' => 'banco2'
				)
			)
		);

		$this->add(
			array(
				'name' => 'agencia2',
				'options' => array(
					'type' => 'text',
					'label' => 'Agencia 2: '
				),
				'attributes' => array(
					'id' => 'agencia2'
				)
			)
		);	

		$this->add(
			array(
				'name' => 'telefoneBanco2',
				'options' => array(
					'type' => 'text',
					'label' => 'Telefone 2: '
				),
				'attributes' => array(
					'id' => 'telefoneBanco2'
				)
			)
		);	

		$this->add(
			array(
	           'name' => 'submit',
	            'type' => 'Zend\Form\Element\Submit',
	            'attributes' => array(
	                'value' => 'Salvar',
	                'class' => 'btn-success'
	            )
        	)
		);



		/*$this->add(
			array( 
            	'name' => 'csrf', 
            	'type' => 'Zend\Form\Element\Csrf', 
        	)
		);*/  
	}
}