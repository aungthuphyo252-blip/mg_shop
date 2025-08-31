# kzlshop CMS

## Overview
kzlshop CMS is a content management system built with PHP and MySQL. It provides a simple and efficient way to manage content for your website without relying on Firebase. This project is structured to separate concerns between configuration, controllers, models, and views.

## Project Structure
```
kzlshop-cms
├── src
│   ├── config
│   │   └── database.php       # Database connection settings
│   ├── controllers
│   │   └── index.php          # Main logic for the CMS
│   ├── models
│   │   └── index.php          # Database interaction methods
│   ├── views
│   │   └── index.php          # HTML structure for the main view
│   └── index.php              # Entry point of the application
├── public
│   └── index.php              # Public-facing entry point
├── composer.json              # Composer configuration file
└── README.md                  # Project documentation
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd kzlshop-cms
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```

## Configuration
- Update the database connection settings in `src/config/database.php` with your MySQL credentials.

## Usage
- Access the application by navigating to `public/index.php` in your web browser.

## Contributing
Feel free to submit issues or pull requests for improvements and bug fixes.

## License
This project is licensed under the MIT License.