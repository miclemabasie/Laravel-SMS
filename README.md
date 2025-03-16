# School Managment System


## Requirements

Before you begin, make sure you have the following installed:

- PHP >= 8.4.0
- Composer
- MySQL
- Laravel 12

**Make sure XAMMP is running on windows and mysql service is started.**

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/miclemabasie/Laravel-Blog.git
   cd Laravel-Blog
   ```

2. **Install dependencies:**
   Run the following command to install Laravel's PHP dependencies using Composer:
   ```bash
   composer install
   ```

3. **Copy the `.env.example` file to `.env`:**
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**
   Laravel requires an application key for encryption purposes. Generate it by running:
   ```bash
   php artisan key:generate
   ```

5. **Set up the database:**
   Update the `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

6. **Run migrations to set up the database tables:**
   ```bash
   php artisan migrate
   ```

7. **Runing the project**
    ```bash
    php artisan serve
    ```


## Testing

### Running Test
```bash
php artisan test
```

