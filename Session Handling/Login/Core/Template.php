<?php

namespace Core;

class Template implements TemplateInterface
{
    const TEMPLATES_FOLDER = 'App/Templates/';
    const TEMPLATES_EXTENTION = '.php'; 

    public function render(string $templateName, $data)
    {
        require_once self::TEMPLATES_FOLDER 
            . $templateName
            . self::TEMPLATES_EXTENTION;
    }
}