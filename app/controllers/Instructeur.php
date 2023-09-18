<?php

class Instructeur extends BaseController
{
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }


    public function TestInst()
    {
        $result  = $this->instructeurModel->getInstructeurs();

        var_dump($result);

        $data = [
            'title' => 'Instructeurs in dienst'
        ];

        $this->view('Instructeur', $data);
    }
}