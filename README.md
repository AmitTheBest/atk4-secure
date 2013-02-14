# Secure Agile Toolkit setup

The default setup for Agile Toolkit (4.2.*) has all it's files publicly available in webroot. There are number of reasons why this is insecure. This project shows a default setup where the system files are removed from webroot. It also shows how to make use of the PHP dependency manager [Composer] [0].

## Install

* Clone git project

```
$ git clone git@github.com:dirkpostma/atk4-secure.git
```

* Remove .git folder and init your own project git

```
rm -rf .git
git init
git add .
git commit -m "Initial Commit"
```

* Install [Composer] [0]

```
$ curl -s https://getcomposer.org/installer | php
```

* Update packages

```
$ php composer.phar update
```

## Windows users
This Agile Toolkit setup requires symlinks to be able to access the default Agile Toolkit resources like images, css files etc. How to use symlinks on the Windows platform is described [here][1]. After, you should create the following symlink:

```
cd public/atk4
mklink ../../vendor/atk4/atk4/templates/ templates
```

[0]: http://www.getcomposer.org/
[1]: http://www.howtogeek.com/howto/16226/complete-guide-to-symbolic-links-symlinks-on-windows-or-linux/
