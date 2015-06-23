# CodeIgniter 3 Demo for Glad Auth

First, copy config file to project config directory.

from:
```php
CodeIgniter3/config/glad.php
```
to:

```php
yourproject/application/config/glad.php
```
**Second process:**

Copy controller file to project controller directory.

from:
```php
CodeIgniter3/controllers/Auth.php
```

to:
```php
yourproject/application/controllers/Auth.php
```

**Example code from controller:**

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Glad\Glad;

class Auth extends CI_Controller {

	public function index()
	{
		Glad::setup($this->config->item('glad'));
		Glad::services(['db' => $this->glad_model]);

		Glad::login(['username' => 'example@example.com', 'password' => '123412']);

		if(Glad::status() === true) {

			// do something...

		}
	}
}
```

**Last process:**

Copy model file to project model directory.

from:
```php
CodeIgniter3/application/models/Glad_model.php
```

to:

```php
yourproject/application/models/Glad_model.php
```

Happy coding!