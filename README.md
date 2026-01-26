# Widget App Project

This application is built with [Laravel](https://laravel.com) and [Vite](https://vitejs.dev/).

---

## 🛠 Prerequisites

Before you begin, ensure you have the following installed:
* **PHP >= 8.2**
* **NODE >= 22**
* **Composer**
* **NPM**

## 🚀 Installation & Setup

Follow these steps to get your development environment running:

### 1. Clone the Repository
```bash
git clone https://github.com/NorMenMe/widget-app.git
cd widget-app
```

### 2. Install Dependencies
```bash
# Install PHP packages
composer install

# Install Frontend packages
npm install
```

### 3. Environment Configuration
Open the .env file and update it with your API Key

### 4. Local Development
On terminal's tab 1, in the root folder, create the SQLite database file:
```bash
touch database/database.sqlite
```

In the root folder, run migrations to set up the database tables:
```bash
php artisan migrate
```

Run the server:
```bash
php artisan serve
```


On terminal's tab 2:
```bash
npm run dev
```

The application will be accessible at http://localhost:8000.

### 5. Troubleshooting
If you change your .env file and don't see the changes in your app, run:
```bash
php artisan config:clear
```


