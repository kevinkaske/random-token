# random-token
A simple function to generate a random token

## Install via composer
Installation of random token is through [composer](https://getcomposer.org).

To get started quickly, run the following command
```bash
composer require kevinkaske/random-token
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
