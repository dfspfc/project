<?php

namespace Lojista\Controller;

use Zend\View\Model\ViewModel,
    Zend\Mvc\Controller\AbstractActionController;

use Lojista\Form\Lojista         as LojistaForm,
    Lojista\Form\PesquisaLojista as PesquisaLojistaForm,
    Lojista\Entity\Lojista       as LojistaEntity;


class LojistaController extends AbstractActionController
{
    private $lojistaService;
    private $lojistaEnderecoService;
    private $lojistaTelefoneService;
    private $lojistaCelularService;
    private $lojistaFornecedorService;
    private $flashMessengerService;

    public function cadastroAction()
    {
    	$lojistaForm = new LojistaForm();
    	$request     = $this->getRequest();

    	if($request->isPost()) {
            //var_dump($request->getPost()->toArray()); die;  
            $inserted  = $this->getLojistaService()->save(
                $request->getPost()->toArray()
            );
            //var_dump($inserted); die;
            $lojistaId = $inserted->getGeneratedValue();
            if($lojistaId) {
                $this->getLojistaEnderecoService()->save(
                    $request->getPost()->toArray(),
                    $lojistaId
                );

                $this->getLojistaTelefoneService()->save(
                    $request->getPost()->toArray(),
                    $lojistaId
                );

                $this->getLojistaCelularService()->save(
                    $request->getPost()->toArray(),
                    $lojistaId
                );

                $this->getLojistaFornecedorService()->save(
                    $request->getPost()->toArray(),
                    $lojistaId
                );
            }

            //var_dump($lojistaId); die;
            if($lojistaId) {
                $this->getFlashMessengerService()
                    ->addMessage($this, 'Lojista', 'Lojista cadastrada com sucesso!');

                return $this->redirect()->toRoute('lojista-cadastro');
            }
    	}

        return new ViewModel(
        	array(
        		'form' => $lojistaForm,
    			'messages' => $this->getFlashMessengerService()
                    ->getMessages($this, 'Lojista')
    		)
    	);
    }

    public function pesquisaAction()
    {
        $pesquisaLojistaForm = new PesquisaLojistaForm();

        $request = $this->getRequest();

        if($request->isPost()) {
            $pesquisaLojistaForm->setData($request->getPost());

            if($pesquisaLojistaForm->isValid()) {
                $lojistaEntity  = $this->getLojistaService()->getByCnpj($request->getPost('cnpj'));

                if($lojistaEntity instanceof LojistaEntity) {
                    return $this->renderLojistas($lojistaEntity);
                } else {
                    $this->getFlashMessengerService()
                        ->addMessage($this, 'Lojista', 'Lojista não encontrada!');
                }
            }
        }

        return new ViewModel(
            array(
                'form' => $pesquisaLojistaForm,
                'messages' => $this->getFlashMessengerService()
                    ->getMessages($this, 'Lojista')
            )
        );
    }

    private function renderLojistas(LojistaEntity $lojistaEntity)
    {
        $viewModel = new ViewModel(
            array(
                'lojista' => $lojistaEntity
            )
        );
        $viewModel->setTemplate('lojista/index/listagem.phtml');
        return $viewModel;
    }

    private function getLojistaService()
    {
        if(null === $this->lojistaService) {
            $this->lojistaService = $this->getServiceLocator()->get('Lojista\Service\Lojista');
        }
        return $this->lojistaService;
    }

    private function getLojistaEnderecoService()
    {
        if(null === $this->lojistaEnderecoService) {
            $this->lojistaEnderecoService = $this->getServiceLocator()->get('Lojista\Service\LojistaEndereco');
        }
        return $this->lojistaEnderecoService;
    }

    private function getLojistaTelefoneService()
    {
        if(null === $this->lojistaTelefoneService) {
            $this->lojistaTelefoneService = $this->getServiceLocator()->get('Lojista\Service\LojistaTelefone');
        }
        return $this->lojistaTelefoneService;
    }

    private function getLojistaCelularService()
    {
        if(null === $this->lojistaCelularService) {
            $this->lojistaCelularService = $this->getServiceLocator()->get('Lojista\Service\lojistaCelular');
        }
        return $this->lojistaCelularService;
    }

    private function getLojistaFornecedorService()
    {
        if(null === $this->lojistaFornecedorService) {
            $this->lojistaFornecedorService = $this->getServiceLocator()->get('Lojista\Service\LojistaFornecedor');
        }
        return $this->lojistaFornecedorService;
    }

    private function getFlashMessengerService()
    {
        if(null === $this->flashMessengerService) {
            $this->flashMessengerService = $this->getServiceLocator()->get('Lojista\Service\FlashMessenger');
        }
        return $this->flashMessengerService;
    }
}