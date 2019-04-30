Composer install
Npm İnstall..


```php
$frontend = new FrontEnd();

$frontend->addNavMenus([
    'menu-1' => 'Primary',
]);

$frontend->addSupport('post-thumbnails');

$frontend->addImageSize('full-width', 1600);

$frontend->addStyle('theme-styles',  get_stylesheet_uri())
      ->addScript('theme-script', get_template_directory_uri() . '/js/custom.js')
```

[Symfony Assets](https://symfony.com/doc/current/components/asset.html)

Add Symfony assets
Js Webpack manifest

```php
define('DIR_Path', realpath(__DIR__) .DIRECTORY_SEPARATOR);

$path = get_template_directory_uri() . '/public';


define('Path', $path);
```
Dir_Path Url

Path template url public