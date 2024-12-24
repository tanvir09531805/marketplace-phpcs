# Prerequisites

[Git](https://git-scm.com/downloads)  (Distributed version-control system)

[Composer](https://getcomposer.org/download/) (PHP Dependency Manager)

# Usage

1. Clone this repository `git clone https://github.com/elegantthemes/marketplace-phpcs/`
2. Inside the `marketplace-phpcs` directory, run `composer install`
3. Then run `./vendor/bin/phpcs --standard=ruleset.xml /full/path/to/your/product`
4. To only show errors add `-n` to the command above.

## my usage pattern |=> run this commend any where
Just change you folder location where you install phpcs (Ex. E:/marketplace-phpcs/vendor/bin/phpcs) and replace this which folder you want to check (Ex. E:/laragon/www/divi/wp-content/plugins/dg-showcase)
```sh
E:/marketplace-phpcs/vendor/bin/phpcs --standard=E:/marketplace-phpcs/ruleset.xml --extensions=php E:/laragon/www/divi/wp-content/plugins/dg-showcase
```


