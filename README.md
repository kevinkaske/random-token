# random-token
A simple function to generate a random token

## Install via composer
Installation of pooch is through [composer](https://getcomposer.org). You simply need to create a directory and create a composer.json
file with the following contents:
```json
{
	"minimum-stability": "dev",
	"require": {
		"kevinkaske/random-token": "dev-master"
	}
}
```

## Usage
Call the following function to get a random token string. The default length is 40 characters;
```php
getToken();
```
You can pass in another int for length if you need something longer or shorter than 40.
```php
getToken(22);
```
