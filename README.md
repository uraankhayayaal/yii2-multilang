Multilang for Yii2
==================
Multilang for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ayaalkaplin/yii2-multilang "*"
```

or add

```
"ayaalkaplin/yii2-multilang": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Be sure that you have lines in urlManager config:

```php
'urlManager' => [
    ******
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    ******
]
```

Migrate:

```
php yii migrate --migrationPath=@vendor/ayaalkaplin/yii2-multilang/src/migrations
```

Once the extension is installed, simply use it in your code by  :

```php
<?= \ayaalkaplin\multilang\widgets\lang\Change::widget(); ?>
```

For backend add this URL

```php
<?= Url::toRoute(['/multilang/back-lang/index']); ?>
```