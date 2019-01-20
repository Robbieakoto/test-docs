
---
title: Getting Started
description: Getting started with Epay is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

# Introduction {#introduction}
 ### What is Epay?
 Epay is a payment service that makes it easier for African businesses to securely accept online payments (both local and International) without coding or having a website and at no cost.

 _Focus on building a global business and not on payments infrastructure. Get Paid around the World, Grow your Business, Go Global!_

 > Tip: ### What makes us different?
    *Instant settlements with the lowest transaction fees.
    *You don't need a website or to write code to be able to accept payments for your business.
    *Developer friendly with webhook and API driven platform
    *Easy to setup and start accepting payments in minutes
    *Your customers need no mobile app installed and don't need to signup on epay to pay you.

# Getting Started {#getting-started}

All you have to do to start using Epay.

> Tip: ### Steps on how to accept payments on Epay ;
    *Setup your Epay account and verify your Email address
    *Create a payment page
    *Share page link with customers to get paid
    

```php
// config.php
return [
    'baseUrl' => 'https://epaygh.com/',
    'production' => false,
    'siteName' => 'Epay',
    'siteDescription' => 'Epay documentation',
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',
    'navigation' => require_once('navigation.php'),
];
```


---
## Setting Up Your Account {#setup}
    *Create an Account by signing up
    *Verify your email address
    *Login to your account
    
## How to Create a Payment Page
    A _Payment Page_ can represent anything you want to charge money for, including; a downloadable product, a private course, T-shirt etc.
    *After you login successfully, head to the navigation and click on _Payment Pages_.
    *On the top right corner is a button named _Create New Page_; click on it to create your payment page.
    *Now, copy the link provided you when you create the page and start sharing with whoever needs to pay you.

### Adding Content {#getting-started-adding-content}

You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/docs` folder. If you change this, be sure to update the URL references in [navigation.php](/docs/navigation.php).

[Read more about navigation.](/docs/navigation)

The first section of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.documentation` will render with `source/_layouts/documentation.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---
```

[Read more about Jigsaw layouts.](https://jigsaw.tighten.co/docs/content-blade/)

---

### Adding Assets {#getting-started-adding-assets}

Any assets that need to be compiled (such as JavaScript, Less, or Sass files) can be added to the `source/_assets/` directory, and Laravel Mix will process them when running `npm run local` or `npm run production`. The processed assets will be stored in `/source/assets/build/` (note there is no underscore on this second `assets` directory).

Then, when Jigsaw builds your site, the entire `/source/assets/` directory containing your built files (and any other directories containing static assets, such as images or fonts, that you choose to store there) will be copied to the destination build folders (`build_local`, on your local machine).

Files that don't require processing (such as images and fonts) can be added directly to `/source/assets/`.

[Read more about compiling assets in Jigsaw using Laravel Mix.](http://jigsaw.tighten.co/docs/compiling-assets/)

---

## Building Your Site {#getting-started-building-your-site}

Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.

```bash
# build static files with Jigsaw
./vendor/bin/jigsaw build

# compile assets with Laravel Mix
# options: dev, staging, production
npm run dev
```
