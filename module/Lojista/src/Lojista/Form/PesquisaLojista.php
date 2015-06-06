<?php

namespace Lojista\Form;

use Zend\Form\Form;
use Lojista\Form\InputFilter\PesquisaLojista as PesquisaLojistaInputFilter;

class PesquisaLojista extends Form
{
	public function __construct()
	{
		parent::__construct('pesquisa-lojista');

		$this->setInputFilter(new PesquisaLojistaInputFilter());

		$this->setAttribute('method', 'post');

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
	           'name' => 'submit',
	            'type' => 'Zend\Form\Element\Submit',
	            'attributes' => array(
	                'value' => 'Pesquisar',
	                'class' => 'btn-success'
	            )
        	)
		);
	}
}