# Simple Sessions

Simple sessions manager

## Installation

Composer
```bash
composer require edgard-alas/simple-sessions:dev-master
```

## Usage

```php
//init session
$sesion = new Session();

//set
$sesion->set('key', 'value');

$sesion->set('key2',  array(
   'key' => 'value'
));

//get
$sesion->get('key');
$sesion->get('key2');

//destroy
$sesion->destroy();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)