Symfony Services and Twig
==================

Project
=================
This is a demo application built to demonstrate how to use a Symfony service from a twig template. This process involves four steps:
1. Create the service (sample service in the `App/Service` folder)
2. Make the service available as a Twig global (sample configuration in `config/packages/twig.yaml`)
3. Use the service in Twig template (sample in `templates/index/index.html.twig`)

You can read the accompanying article [here](https://medium.com/@UP634182/today-i-learnt-twig-and-services-fca8d3f05d29)


Deploying
=================

## Technical Requirements

Before creating your first Symfony application you must:
* Install PHP 8.0.2 or higher and these PHP extensions (which are installed and enabled by default in most PHP installations):
  [Ctype](https://www.php.net/book.ctype), [iconv](https://www.php.net/book.iconv), [JSON](https://www.php.net/book.json) ,[PCRE](https://www.php.net/book.pcre), [Session](https://www.php.net/book.session), [SimpleXML](https://www.php.net/book.simplexml), and [Tokenizer](https://www.php.net/book.tokenizer);

* Install [Composer](https://getcomposer.org/download/), which is used to install PHP packages.

* [Symfony CLI](https://symfony.com/download). This creates a binary called symfony that provides all the tools you need to develop and
  run your Symfony application locally.

* The symfony binary also provides a tool to check if your computer meets all requirements. Open your console terminal and run this command:

        symfony check:requirements


Please visit [The Symfony Official Page](https://symfony.com/doc/current/setup.html) for more information on this project's technical
requirements.


## Installation
- Clone the project from Github

        git clone https://github.com/ybjozee/twig-and-service-collaboration

- cd into the project

        cd twig-and-service-collaboration

- install the project dependencies

        composer install

- serve your application

        symfony serve

- Navigate to the index page ([http://localhost:8000](http://localhost:8000) by default) to see the seal image
