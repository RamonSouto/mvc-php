<?php

namespace App\Utils;

class view
{
    /**
     * Método reponsavel por retornar o contúdo de uma view
     *
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        //Pega o caminho das pasta view em resource
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';

        //Verifica se arquivo exites, se existir retorna o arquivo, se não exister retorna vazio
        return file_exists($file) ? file_get_contents($file) : '';
    }


    /**
     * Método resposavel por retornar o conteúdo renderizado da View
     *
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        //Conteúdo da View
        $contentView = self::getContentView($view);

        //Chaves do Array de variaveis
        $keys = array_keys($vars);


        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);


        //Retorna o Conteúdo Renderizado
        return str_replace($keys, array_values($vars), $contentView);
    }
}
