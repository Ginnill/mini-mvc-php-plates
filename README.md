# pure-php-mini-mvc-plates

A minimal **MVC architecture in pure PHP**, using:

- **PlatesPHP** (template engine) for views.
- **GuzzleHTTP** for consuming external APIs.
- **PDO** for database connections (MySQL/Postgres).
- A lightweight **Router** and **Front Controller** (`public/index.php`).


---

## 🚀 Features

- Simple **MVC pattern** with PSR-4 autoloading.
- **Front Controller + Router** for clean URLs.
- **Views with PlatesPHP**: clean, fast, and native PHP templates.
- **HTTP requests with Guzzle** for external API consumption.

---

## ⚙️ Usage

1. Install dependencies:

```bash
composer require league/plates guzzlehttp/guzzle
