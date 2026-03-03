# Infinity App

A modern web application built with [Laravel](https://laravel.com) and [Filament](https://filamentphp.com).

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- SQLite (default) or MySQL

## Installation

1. **Clone the repository**

    ```bash
    git clone https://github.com/MYHEAT-Choose-Life/Infinity.git
    cd Infinity
    ```

2. **Install Dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Environment Setup**
   Copy the example environment file and configure it:

    ```bash
    cp .env.example .env
    ```

    _Windows (PowerShell):_

    ```powershell
    copy .env.example .env
    ```

4. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Database Setup**
   The application uses MySQL. Ensure your `.env` file is configured with your MySQL credentials:

    ```bash
    php artisan migrate
    ```

    Update the `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables in your `.env` file to match your local MySQL configuration.

## Running the Application

for development, you can run the following command to start the server and asset compilation:

```bash
composer run dev
```

Or run them separately:

```bash
# Start Laravel server
php artisan serve

# Start Vite (in a new terminal)
npm run dev
```

The application will be accessible at [http://localhost:8000](http://localhost:8000).

## Admin Panel

This application uses **Filament** for the admin interface.

- **URL**: The admin panel URL is environment-specific and configured privately through environment variables.
- **Login**: You will need to create an admin user to log in.

### Creating a User

To create a new admin user, run:

```bash
php artisan make:filament-user
```

Follow the prompts to enter a name, email, and password.

### Admin Security Setup

Configure the admin panel route and MFA-related paths in your environment:

```env
FILAMENT_ADMIN_PATH=ops-portal-7f3c29
FILAMENT_ADMIN_LOGIN_SLUG=sign-in
FILAMENT_ADMIN_MFA_PREFIX=verify-access
```

After creating an admin user:

1. Sign in using the private admin URL configured for the environment.
2. Enroll an authenticator app when prompted.
3. Store recovery codes securely.
4. Optionally enable email MFA after production mail delivery is configured and the admin email is verified.

## Useful Commands

- **Clear Cache**: `php artisan optimize:clear`
- **Run Tests**: `php artisan test`
- **Create Filament Resource**: `php artisan make:filament-resource Customer`

## Troubleshooting

- **Storage Permission**: If you see image loading issues, ensure the storage link is created:
    ```bash
    php artisan storage:link
    ```
- **Vite Manifest not found**: Ensure you have run `npm install` and `npm run build` (or `npm run dev` is running).
- **Email MFA**: Ensure `MAIL_MAILER` and related mail settings are configured in non-local environments before relying on email MFA.

## Testing

For detailed instructions on running tests, please refer to [TESTING.md](TESTING.md).
