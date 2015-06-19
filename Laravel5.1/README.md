# Laravel 5.1 Demo for Glad Auth

First, copy config file to project config directory.

from:
```php
Laravel5.1/app/config/glad.php
```

to:

```php
yourproject/app/config/glad.php
```

**Second process:**

Copy controller file to project controller directory.

from:
```php
Laravel5.1/app/Http/Controllers/GladAuth.php
```

to:
```php
yourproject/app/Http/Controllers/GladAuth.php
```

**Example code from controller:**

```php
 public function login()
{
     $request = new Request;

    // form validation
    $validator = Validator::make(['email' => 'ali.yildiz@example.com', 'password' => '1234123'], [
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);

     // run the validator
    if($validator->fails()) {
        return redirect('your/url')->withErrors($validator)->withInput();
    }

    Glad::login(['email' => 'ali.yildiz@example.com', 'password' => '1234123'])
        ->apply(function(Glad $glad){

            $glad->conditions(['activate' => 1, 'banned' => 0]);

            $glad->event('activate', function() {
                exit('your account has not activated');
            });

            $glad->event('banned', function() {
                exit('your account has been banned');
            });

        });


    if(Glad::status() === true) {

        // do something...

    }
}
```

**Last process:**

Copy model file to project model directory.

from:
```php
Laravel5.1/app/GladModel.php
```

to:

```php
yourproject/app/GladModel.php
```

Happy coding!