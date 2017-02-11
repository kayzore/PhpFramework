<?php

namespace kayzore\bundle\ConfigurationBundle;


class KayParameters
{
    private $pathView;
    private $pathConfig;
    private $pathErrorView  = 'src/kayzore/bundle/ErrorBundle/';

    public function __construct() {
        define('DIR_VIEW_ERROR', $_SERVER['DOCUMENT_ROOT'] . RACINE_WEB . $this->pathErrorView);

        define('DIR_VIEW', $_SERVER['DOCUMENT_ROOT'] . RACINE_WEB . $this->pathView);
        define('DIR_CONFIG', $_SERVER['DOCUMENT_ROOT'] . RACINE_WEB . $this->pathConfig);
    }
}