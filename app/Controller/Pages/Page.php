<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
    /**
     * Método responsavel por renderizar o topo da pagina
     *
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }
    /**
     * Método reponsavel por retornar o conteúdo (view) da Pagina GENÉRICA
     *
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }

    /**
     * Método responsavel por renderizar Footer da Pagina
     *
     * @return void
     */
    public static function getFooter()
    {
        return View::render('pages/footer');
    }
}
