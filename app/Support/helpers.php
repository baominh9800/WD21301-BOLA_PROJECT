<?php
declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function base_path(): string
{
    $configured = $GLOBALS['app_config']['base_path'] ?? '';
    if ($configured !== '') {
        return rtrim($configured, '/');
    }
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
    $directory = rtrim(str_replace('\\', '/', dirname($script)), '/.');
    return $directory === '' ? '' : $directory;
}

function front_url(): string
{
    return base_path() . '/index.php';
}

function url(string $route = 'san-pham', array $parameters = []): string
{
    return front_url() . '?' . http_build_query(array_merge(['route' => $route], $parameters), '', '&', PHP_QUERY_RFC3986);
}

function asset(string $path): string
{
    return base_path() . '/assets/' . ltrim($path, '/');
}

function form_route(string $route, array $parameters = []): string
{
    $html = '';
    foreach (array_merge(['route' => $route], $parameters) as $key => $value) {
        $html .= '<input type="hidden" name="' . e($key) . '" value="' . e($value) . '">';
    }
    return $html;
}

function query_string(string $key, string $default = ''): string
{
    $value = $_GET[$key] ?? $default;
    return is_string($value) ? trim($value) : $default;
}

function query_id(int $default = 0): int
{
    $value = query_string('id', (string) $default);
    return preg_match('/^[0-9]{1,9}$/D', $value) === 1 ? (int) $value : 0;
}

function money(int $amount): string
{
    return number_format($amount, 0, ',', '.') . '₫';
}

function shipping_fee(int $subtotal): int
{
    return $subtotal >= $GLOBALS['app_config']['free_shipping_from'] ? 0 : $GLOBALS['app_config']['shipping_fee'];
}

function icon(string $name): string
{
    static $icons;
    $icons ??= require APP_ROOT . '/app/Support/icons.php';
    return '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true">' . ($icons[$name] ?? $icons['info']) . '</svg>';
}

function partial(string $name, array $data = []): void
{
    if (!preg_match('~^[a-z0-9/-]+$~D', $name)) {
        throw new InvalidArgumentException('Partial không hợp lệ.');
    }
    extract($data, EXTR_SKIP);
    require APP_ROOT . '/app/Views/' . $name . '.php';
}
