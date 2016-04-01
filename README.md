![Frisbee](https://i.imgur.com/PZxCsay.png "Frisbee")

# Frisbee by Enrise

[![Exception Coverage](https://img.shields.io/badge/Exception%20Coverage-100%25-green.svg?style=flat-square)](https://github.com/Enrise/Frisbee)
[![Exception Driven Development](https://img.shields.io/badge/EDD-100%25-green.svg?style=flat-square)](https://github.com/Enrise/Frisbee)
[![Travis branch](https://img.shields.io/travis/Enrise/Frisbee/master.svg?style=flat-square)](https://travis-ci.org/Enrise/Frisbee)
[![Packagist](https://img.shields.io/packagist/v/enrise/frisbee.svg?style=flat-square)](https://packagist.org/packages/enrise/frisbee)  [![Packagist](https://img.shields.io/packagist/dm/enrise/frisbee.svg?style=flat-square)](https://packagist.org/packages/enrise/frisbee/stats)
[![Packagist](https://img.shields.io/packagist/l/enrise/frisbee.svg?style=flat-square)](https://github.com/Enrise/Frisbee/blob/master/LICENSE)

## Demo

![](https://raw.githubusercontent.com/Enrise/Frisbee/master/frisbee-demo.gif)

## About

With Frisbee you can start enjoying the next level of programming: exception driven development.

Exception driven development takes everything what's good about programming, intensifies it by 300%, and puts it a easy to remember workflow.

Once you get used to it, you wonder why you ever used Laravel.

## Core concepts

Frisbee achieves the goodness by employing these two core concepts: Frisbees and Boomerangs. Each is based upon the concept of exceptions, and by throwing these, we achieved optimal speed an stability.

By accepting exceptions as a thing of beauty instead of an annoying byproduct of coding, we optimize your workflow and attitude towards life.

Please note that only recent versions of PHP (being 7 and up) support the right attitude towards exceptions, so Frisbee is optimized only for PHP7.

## Installation

To start a new project based on Frisbee, simply use composer to create a project:

```
$ composer create-project enrise/frisbee
```

and start a local webserver like so:

```
$ php -S localhost:8080 dev/router.php
```

Now checkout http://localhost:8080 and see a skeleton Frisbee app in action!

## Throwing your first application

As explained above, Frisbee is built upon the core concepts of Frisbees and Boomerangs.

In the next section of this README, we will step through each of the basic concepts.

### Frisbees

Frisbees are used to throw the part of your application you want to use next.
An example of this can be seen from the very start of the application, in `public/index.php`:

```php
<?php
throw new \Frisbee\Application('myApp');
```

See the code in the application to discover how to fling towards the different parts of your application from here.

### Boomerangs

Boomerangs are like Frisbees, with the added functionality that they return on the place they were thrown from. This makes is unbelievably easy to e.g. load resources like a database handler, or in the example below, the Twig templating engine.

```php
if (!isset($this->resources['template'])) {
    throw new TemplateFetcher('template', $this);
}
```

After throwing the boomerang, ``$this->resources['templates']`` is set and you can go on with your business from here.

## Bugs, questions, and improvements

If you found a bug or have a question, please open an issue on the GitHub Issue tracker.
Improvements can be sent by a Pull Request against the develop branch and are greatly appreciated!
