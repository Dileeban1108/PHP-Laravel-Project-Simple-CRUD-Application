# Simple CRUD Application

This project is a simple CRUD (Create, Read, Update, Delete) application built using the Laravel framework. Follow the instructions below to set up and run the application.

## Prerequisites

- **Composer:** Ensure you have [Composer](https://getcomposer.org/) installed on your system.
- **XAMPP:** Ensure you have [XAMPP](https://www.apachefriends.org/index.html) installed to manage your database and server.

## Setup Instructions

1. **Clone the Repository:**
   - Clone the project repository to your local machine using Git or download the project as a ZIP file and extract it.

2. **Install Dependencies:**
   - Navigate to the project root directory using your command line interface (CLI).
   - Run the following command to install the required dependencies:
     ```bash
     composer install
     ```

3. **Create a Database:**
   - Open XAMPP and start Apache and MySQL.
   - Open phpMyAdmin by navigating to `http://localhost/phpmyadmin` in your browser.
   - Create a new database named `crud_app`.

4. **Configure Environment Variables:**
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Open the `.env` file and set the database connection details:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=crud_app
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Generate Application Key:**
   - Run the following command to generate the application key:
     ```bash
     php artisan key:generate
     ```
     
5. **Clear Configuration Cache:**
   - After setting the application key, clear the configuration cache to ensure Laravel picks up the new key:
     ```bash
     php artisan config:cache
     ```
     
6. **Run Migrations:**
   - Run the migrations to create the necessary database tables:
     ```bash
     php artisan migrate
     ```

6. **Clear Application Caches:**
   - Clear various Laravel caches to ensure there are no stale or corrupted cached files:
     ```bash
     php artisan cache:clear
     php artisan config:clear
     php artisan route:clear
     php artisan view:clear
     ```
     
8. **Serve the Application:**
   - Start the Laravel development server by running:
     ```bash
     php artisan serve
     ```
   - Access the application by navigating to `http://localhost:8000` in your web browser.

## Usage

- **Create:** Use the form to add new records to the database.
- **Read:** View the list of records on the main page.
- **Update:** Edit existing records using the edit functionality.
- **Delete:** Remove records using the delete option.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
