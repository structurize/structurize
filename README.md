# Structurize PHP Package

## Overview

structurize/structurize is a versatile PHP package designed to facilitate communication with the Structurize API. This framework-agnostic package empowers developers to interact seamlessly with the Structurize API, utilizing the expressive and dynamic features of PHP. The primary functionality of this package lies in its ability to generate JSON payloads, providing a convenient way to structure and send data to the Structurize API.

## Features

### 1. Framework Agnostic

Structurize/Structurize is built to be independent of any specific PHP framework, making it compatible with a wide range of PHP applications. Whether you are using Laravel, Symfony, CodeIgniter, or any other framework, you can easily integrate this package into your project.

### 2. JSON-Powered API

The Structurize API relies on JSON for data communication. Structurize/Structurize takes advantage of this by allowing developers to create JSON payloads using a PHP-based API. This simplifies the process of constructing complex data structures, making it more intuitive and developer-friendly.

### 3. Seamless Integration

Integrating Structurize/Structurize into your project is straightforward. The package is installable via Composer, the de facto PHP package manager. Once installed, you can leverage the package to streamline your interactions with the Structurize API without the need for extensive configuration.

## Getting Started

### Installation

To install structurize/structurize, use Composer:

```bash
composer require structurize/structurize
```

## Basic Single brick usage

### Get you user information

```php
$user = app(Structurize\Structurize\User::class);
$userInfo = $user->info;
```

```json
{
  "uuid": "a2365e7c-1b5e-411c-afc4-0e62cd184d09",
  "name": "Dieter Coopman",
  "email": "dieter@structurize.be",
  "wallet": 0,
  "business_name": "Delta Solutions",
  "btw_number": "",
  "address": "Groenbek",
  "address_number": "3",
  "postal_code": "8790",
  "city": "Waregem",
  "country": "Belgie",
  "technical_info": {}
  }
```

### Image operations

### Blur an image





```php
new Building(['webhook' => 'http://webhook.acme.com', 'input_file' => 'your_input.jpg', 'output_file' => 'your_output.jpg']))
         ->add((new StorageGet())->parameters(filename: '$input_file')->as('$input_stream'))
         ->add((new ImageBlur())->parameters(input: '$input_stream')->as('$blurred'))
         ->add((new ImageRemoveBg())->parameters(input: '$blurred')->as('$removed'))
         ->add((new ImageResize())->parameters(input: '$removed',width: 1024)->as('$resized'))
         ->add((new StoragePut())->parameters(filename:'$output_file', input:'$resized'))
```

## Contributions

Contributions to Structurize/Structurize are welcome! If you encounter issues, have suggestions, or want to contribute improvements, please feel free to open an issue or submit a pull request on the [GitHub repository](https://github.com/structurize/structurize).

## License

Structurize/Structurize is open-source software licensed under the [MIT License](LICENSE).

## Conclusion

Structurize/Structurize simplifies the integration of your PHP application with the Structurize API. By providing a convenient PHP API for constructing JSON payloads, this package enhances the developer experience and promotes cleaner, more expressive code. Explore the documentation on GitHub to unlock the full potential of Structurize/Structurize in your projects.
