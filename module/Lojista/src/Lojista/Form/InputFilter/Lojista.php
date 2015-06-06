<?php

namespace Lojista\Form\InputFilter;

use Zend\InputFilter\InputFilter;

class Lojista extends InputFilter {

    public function __construct()
    {
        $this->add(
            array(
                'name' => 'razaoSocial',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'messages' => array(
                                'isEmpty' => 'Razão Social Não pode estar em branco'
                            )
                        )
                    )
                )
            )
        );

        $this->add(
            array(
                'name' => 'cnpj',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'messages' => array(
                                'isEmpty' => 'CNPJ Não pode estar em branco'
                            )
                        )
                    )
                )
            )
        );
    }
}
