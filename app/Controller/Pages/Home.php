<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page
{

    /**
     * Método reponsavel por retornar o conteúdo (view) da Home
     *
     * @return string
     */
    public static function getHome()
    {
        $oOrganizario = new Organization();

        $content = View::render('pages/Home', [
            'name' => $oOrganizario->name,
            'description' => $oOrganizario->description,
            'site' => $oOrganizario->site
        ]);

        return parent::getPage('Titulo da Página', $content);
    }
}
