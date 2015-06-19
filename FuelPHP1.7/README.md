# FuelPHP 1.7 Demo for Glad Auth

First, copy config file to project config directory.

from:
```php
FuelPHP1.7/config/glad.php
```
to:

```php
yourproject/fuel/app/config/glad.php
```
**Second process:**

Copy controller file to project controller directory.

from:
```php
FulPHP1.7/controller/auth.php
```

to:
```php
yourproject/fuel/app/classes/controller/auth.php
```

**Example code from controller:**

```php
public function before()
{
    Glad::setup(Config::load('glad'));
}

/**
 * The basic login
 *
 * @access  public
 * @return  Mixed
 */
public function action_index()
{
	Glad::login(['email' => 'ali.yildiz@example.com', 'password' => '1234123']);
	
	if(Glad::status() === true) {

		// do something...

	}
}
```

**Last process:**

Copy model file to project model directory.

from:
```php
FuelPHP1.7/model/gladauth.php
```

to:

```php
yourproject/fuel/app/classes/model/gladauth.php
```

Happy coding!