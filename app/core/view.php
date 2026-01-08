<?php

function view(string $page, array $data = []): void
{
    extract($data, EXTR_SKIP);

    $viewPath = __DIR__ . '/../views/pages/' . $page . '.php';

    if (!file_exists($viewPath)) {
        http_response_code(404);
        $viewPath = __DIR__ . '/../views/pages/404.php';
    }

    require __DIR__ . '/../views/partials/layout.php';
}
