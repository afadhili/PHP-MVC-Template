# A Simple PHP MVC Template

### Introduction

This PHP MVC Template is made for beginner, if you're looking for a template to build a big project, I don't recommend you to use this template, I only use this template for study purpose.

### Installation

1. Clone this repository to your local machine using:

```
  git clone https://github.com/afadhili/PHP-MVC-Template.git
```

2. Navigate to the project directory:

```
  cd PHP-MVC-Template
```

#### BASEURL

You need to configure the BASEURL in app/config.php

```php
  <?php

  define('BASEURL', 'http://localhost:8080/__YOUR_DIR__');
```

#### Database

If you want to use Database, change the db config in app/config.php

```php
  // DB
  define('DB_HOST', '__HOST__');
  define('DB_USER', '__USER__');
  define('DB_PASS', '__PASS__');
  define('DB_NAME', '__NAME__');
```

Contributing
------------

Contributions to this project are welcome and encouraged! If you find any bugs, want to add new features, or improve the existing ones, feel free to open issues and pull requests.
