# Best Practices Agile Toolkit setup

The default setup for Agile Toolkit (4.2.*) has all it's files publicly available in webroot. There are number of reasons why this is insecure. This project shows a default setup where the system files are removed from webroot. It also shows how to make use of the dependency manager [Composer] [0].

## Usage

* Install [Composer] [0]
`$curl -s https://getcomposer.org/installer | php`
* Update packages
`php composer.phar update`
* Create symlink
```
cd public/atk4
ln -s ../../vendor/atk4/atk4/templates/ templates
```

[0]: http://www.composer.org/