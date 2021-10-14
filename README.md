# IbexaHoneypot
Bundle providing Honeypot field for the Form Builder in Ibexa DXP Experience/Commerce (3.X)

## What is Honey pot?
> A honey pot trap involves creating a form with an extra field that is hidden to human visitors but readable by robots. The robot fills out the invisible field and submits the form, leaving you to simply ignore their spammy submission or blacklist their IP. It’s a very simple concept that can be implemented in a few minutes and it just works – add them to your contact and submission forms to help reduce spam.

## Installation
### Step 1 : Download IbexaHoneypotBundle using Composer
Add IbexaHoneypotBundle to your project by running the command:
```bash
composer require inforca/ibexa-honeypot-bundle
```

### Step 2 : Enable the bundle
To start using the bundle, register the bundle in your application's kernel class:
```php
<?php
// config/bundles.php

return [
    // ...
    Inforca\IbexaHoneypotBundle\IbexaHoneypotBundle::class => ['all' => true],
];
```

***
## Usage
Use Ibexa Form Builder to put a Honeypot field in your form.

The default label is `Honeypot` witch is automatically convert to `Email`.  
You can change label Name.

You should customize the display of the field to hide it.