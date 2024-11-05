# WPINT Plugin #
**Contributors:** [ALI BARZEGAR RAHIMI (ABRZ)](https://github.com/abrzzzz/)  
**Tags:** Wordpress, wp-plugin, plugin, wordpress plugin framework, framework, wpint, wpint plugin, wpint-plugin
**Requires at least:** 4.5  
**Tested up to:** 6.6.2  
**Requires PHP:** 8.1
**Stable tag:** 1.1.0  
**License:** MIT License   
**License URI:** https://mit-license.org/


WPINT Plugin is a WordPress plugin framework.

## About WPINT ##

WPINT is a wordpress plugin framework. It is a simple and easy to use plugin framework which allows you to create your own plugins very quickly.
It takes out the hard work of creating a plugin and gives you the freedom to focus on the core functionality of your plugin. It 
also provides a lot of features by using of the wordpress's core APIs and the [Laravel](https://laravel.com)'s core services such as:
*   [Service Container](https://laravel.com/docs/10.x/container)
*   [Service Provider](https://laravel.com/docs/10.x/providers)
*   [Facades](https://laravel.com/docs/10.x/facades)
*   [Collections](https://laravel.com/docs/10.x/collections)
*   [Eloquent ORM](https://laravel.com/docs/10.x/eloquent)
*   [Cache](https://laravel.com/docs/10.x/cache)
*   [Event](https://laravel.com/docs/10.x/events)
*   [Validation](https://laravel.com/docs/10.x/validation)
*   [Blade Template Engine](https://laravel.com/docs/10.x/blade)
*   [File System](https://github.com/illuminate/filesystem)

and also its native searvices such as:
*   [Routes (Admin Page, Rest Endpoint, Ajax)]()
*   [WPAPI]()
*   [Request]()
*   [CLI]()


## Installation ##

Simply clone the repo from github and place it in your `wp-content/plugins` directory.

e.g.

1. Run `git clone git@github.com:wpint/wpint-plugin.git` in the plugin directory
2. Go to the framework directory and Run `chmod +x ./bin/startup.sh && ./bin/startup.sh`
2. Run `composer install` (make sure you have composer installed)
3. Run `npm install` (make sure you have nodejs installed)
4. Activate the plugin through the 'Plugins' menu in WordPress dashboard
5. Start developing

## Caveats ## 
1. Make sure you have the `storage/plugin/views` directory writable in root of the plugin.
2. You may get the .env file not found error, change .env.example to .env

All these concerns will be resolved by running the `./bin/startup.sh` file.

## Changelog ##
### 1.0.0 ###
* Initial release
* Release date: 2023-01-10
### 1.1.0 ###
* Route debug and new implementation 

## Contributing ##
Thank you for contributing this framework, please review [Contributing Guides](./CONTRIBUTING.md)

## Security ##
In terms of finding any security issues, please send an email to [info@labenter.com](mailto:info@labenter.com)

## License ##
The WPINT framework is open-sourced software licensed under the [MIT license](https://opensource.org/license/mit/).
