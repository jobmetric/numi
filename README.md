# Numi

An `intuitive` accounting management panel designed to `simplify financial tracking` and `reporting`, `empowering businesses` to manage their finances with precision and ease.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/numi
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/numi/config/config.php` to `config` folder of your Laravel application and rename it to `numi.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Numi\NumiServiceProvider" --tag="numi-config"
```

You should now have a `config/numi.php` file that allows you to configure the basics of this package.

## Documentation

coming soon...
