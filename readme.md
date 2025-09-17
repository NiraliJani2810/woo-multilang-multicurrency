# Woo Multilang Multicurrency

A custom **WordPress/WooCommerce extension** that adds **multilingual support** and **multicurrency price switching**.  
Designed with **OOP principles** and focused on performance, scalability, and user experience.

---

## Features
- Add **multilingual support** for product content (e.g., English, German, Hindi).
- Switch between **multiple currencies** (USD, EUR, INR) with live conversion rates.
- Implements **object-oriented architecture** for clean, maintainable code.
- Simple **frontend dropdown UI** for users to select their language and currency.
- Fully compatible with **WooCommerce**.

---

## Installation
1. Download or clone this repository into your WordPress plugins directory:  
    wp-content/plugins/woo-multilang-multicurrency/
2. Activate the plugin from the WordPress Admin panel (`Plugins` → `Installed Plugins`).
3. Make sure WooCommerce is installed and activated.
4. The **currency switcher** will appear in the site footer by default.

---

## Usage
- Currency conversion is applied to product prices automatically.  
- Language preference is saved via cookies.  
- You can customize available currencies and languages inside the `class-currency-switcher.php` and `class-language-handler.php` files.

---

## Project Structure
woo-multilang-multicurrency/
│── woo-multilang-multicurrency.php # Main plugin loader
│── includes/
│ ├── class-currency-switcher.php # Currency conversion logic
│ ├── class-language-handler.php # Language handling
│── assets/
│ └── css/style.css # Basic frontend styling
│── readme.md # Documentation


---

## Security
- Nonces and sanitization can be added for forms.
- Use HTTPS for secure cookie storage.
- Follow WordPress Coding Standards for further enhancements.

---

## License
MIT License – free to use, modify, and distribute.

---

Author: **Niraliben Yash Jani**
