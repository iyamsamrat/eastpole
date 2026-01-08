<?php
declare(strict_types=1);

function base_url(): string
{
    // If you run in subfolder like /eastpole/public, this will be "/eastpole/public"
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $base = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

    return $base === '' ? '' : $base;
}

function url(string $path = ''): string
{
    $path = trim($path, '/');
    $base = base_url();

    if ($path === '') {
        return $base . '/';
    }

    return $base . '/' . $path;
}

function asset(string $path): string
{
    $path = ltrim($path, '/');
    return url($path);
}
