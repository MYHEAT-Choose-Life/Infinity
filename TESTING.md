# Testing Guide

This guide explains how to run the automated tests for the Infinity application.

## Prerequisites

Before running tests, ensure you have:

1.  **Installed Dependencies**: Run `composer install` to fetch PHPUnit and other test tools.
2.  **Configured Database**: Ensure your local MySQL database is running and the credentials in `.env` are correct.
    - **Important**: You might want to create a separate database for testing (e.g., `infinity_test`) to avoid wiping your development data.
    - Update `phpunit.xml` to use this database if you wish: `<env name="DB_DATABASE" value="infinity_test"/>`
3.  **App Key**: Ensure `php artisan key:generate` has been run.

## Running Tests

### 1. Run All Tests

To execute the entire test suite, run:

```bash
php artisan test
```

This will run all Feature and Unit tests and provide a summary of the results.

### 2. Run a Specific Test File

If you only want to run tests within a specific file (e.g., `UserTest`), use the path:

```bash
php artisan test tests/Unit/UserTest.php
```

### 3. Run a Specific Test Class

You can filter by the class name:

```bash
php artisan test --filter UserTest
```

### 4. Run a Single Test Method

To run only one specific test function (e.g., `test_user_creation_with_attributes`), use the `--filter` option with the method name:

```bash
php artisan test --filter test_user_creation_with_attributes
```

## Troubleshooting

### "The test run did not record any output" or "Command 'test' is not defined"

This usually happens if:

- **Dependencies are missing**: Run `composer install`.
- **PHPUnit crashes**: This can happen if there is a fatal error in your code or configuration.
- **Database connection failed**: Check your `.env` file.

If `php artisan test` continues to fail, try running PHPUnit directly:

```bash
./vendor/bin/phpunit
```

Or for a specific filter:

```bash
./vendor/bin/phpunit --filter test_user_creation_with_attributes
```

### "No tests executed"

This means the filter didn't match any test names. Ensure:

- The test method name starts with `test_`.
- You spelled the method name correctly in the `--filter` argument.

### Common Failures

- **Database Errors**: If tests fail with "Connection refused" or "Unknown database", check your `.env` and `phpunit.xml`.
- **Validation Errors**: `ContactFormTest` expects validation. If you disabled validation in the controller, this test will fail.
