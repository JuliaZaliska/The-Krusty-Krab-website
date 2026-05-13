<?php

namespace App;

class PageController
{
    private View $view;

    private array $pages = [
        'home' => [
            'title' => 'Krusty Krab',
            'template' => 'pages/home.php',
        ],
        'menu' => [
            'title' => 'Меню | Krusty Krab',
            'template' => 'pages/menu.php',
        ],
        'contacts' => [
            'title' => 'Контакти | Krusty Krab',
            'template' => 'pages/contacts.php',
        ],
    ];

    public function __construct()
    {
        $this->view = new View();
    }

    public function show(string $page): void
    {
        if (!array_key_exists($page, $this->pages)) {
            http_response_code(404);

            $content = $this->view->render('pages/404.php');

            echo $this->view->render('pages/layout.php', [
                'title' => '404 | Krusty Krab',
                'content' => $content,
            ]);

            return;
        }

        $pageData = $this->pages[$page];

        $content = $this->view->render($pageData['template']);

        echo $this->view->render('pages/layout.php', [
            'title' => $pageData['title'],
            'content' => $content,
        ]);
    }
}