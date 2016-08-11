# TwigDebugHelperBundle
===============================
[![Latest Stable Version](https://poser.pugx.org/webonaute/twig-debug-helper-bundle/v/stable.svg)](https://packagist.org/packages/webonaute/twig-debug-helper-bundle) [![Total Downloads](https://poser.pugx.org/webonaute/twig-debug-helper-bundle/downloads.svg)](https://packagist.org/packages/webonaute/twig-debug-helper-bundle) [![Latest Unstable Version](https://poser.pugx.org/webonaute/twig-debug-helper-bundle/v/unstable.svg)](https://packagist.org/packages/webonaute/twig-debug-helper-bundle) [![License](https://poser.pugx.org/webonaute/twig-debug-helper-bundle/license.svg)](https://packagist.org/packages/webonaute/twig-debug-helper-bundle)
Help frontend developer to find in which template the html stand in.

**Caution:** It is highly not recommended to use this bundle in production.

## Installation

run ```composer require webonaute/twig-debug-helper-bundle ~1.0 ```

## Configuration
Add these 2 lines to your config_dev.yml

```
twig:
    base_template_class: TwigDebugHelperBundle\Twig\DebugTemplate
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
