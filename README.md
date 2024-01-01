# Laravel Appointment Booking Application

This project is a basic appointment booking application developed using PHP and the Laravel Framework.

## Implemented Features

### 1. User Authentication
- Implemented Laravel's basic authentication for user registration, login, and logout using laravel/ui or laravel/breeze.
- Configured the root path to display the login page upon visiting localhost.

### 2. Appointment Management
- Created Controllers, Models, and Migrations for appointment management.
- Users can create, list, update, and delete appointments.
- Upon login, users are directed to the appointment list page with the ability to create appointments.
- The appointment list displays appointment details and provides edit/delete options.
- Implemented form validation to prevent overlapping appointments.

## Getting Started

To run this project locally, follow these steps:

1. Clone this repository to your local machine.
2. Install project dependencies using `composer install`.
3. Configure the `.env` file with your database credentials.
4. Run migrations to set up the database schema: `php artisan migrate`.
5. Serve the application: `php artisan serve`.
6. Compile asstes using: `npm run dev`.
7. Access the application in your browser.

## Contact Information
-  Antonis Vlachovasilis
-  an.vlachovasilis@yahoo.com
