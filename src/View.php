<?php

namespace App;

class View
{
    public function render(string $template, array $data = []): string
    {
        extract($data);

        ob_start();
        require $template;
        return ob_get_clean();
    }
}