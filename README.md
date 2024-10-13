# Selora

A beautifully designed `sales management` panel that empowers businesses to `streamline` their sales processes, track performance, and `maximize revenue` with `ease`.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/selora
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/selora/config/config.php` to `config` folder of your Laravel application and rename it to `selora.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Selora\SeloraServiceProvider" --tag="selora-config"
```

You should now have a `config/selora.php` file that allows you to configure the basics of this package.

## Documentation

coming soon...
