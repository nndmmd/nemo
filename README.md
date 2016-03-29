# *Nemo*

## Start
### Download:

```bash
git clone https://github.com/nndmmd/nemo.git
cd nemo
```

OR:

```bash
wget https://github.com/nndmmd/nemo/archive/master.zip
unzip nemo-master.zip
cd nemo-master
```

### Install dependencies:

```bash
php composer.phar update
```

Then modify `config/database.php` with right information 

### Just see:

*config/routes.php :*

```php
Route::get('/', 'HomeController@home');

```

*app/controllers/HomeController.php :*

```php
public function home()
{
	echo "Hello Nemo.";
}
```

## Features

1. Macaw router
2. MVC architecture
3. One of the Most powerful PHP ORM on Earth: [Laravel Eloquent](http://laravel.com/docs/4.2/eloquent)
4. Powerful Laravel-style view loader [TinyLara/TinyView](https://github.com/TinyLara/TinyView)
5. Redis ready in Laravel-style
6. Handy SMTP mailer


## License

The Nemo framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
