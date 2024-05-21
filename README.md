# Football Management System

A web-based application for managing teams, players, matches, and statistics in a football league. Built using HTML, CSS, JavaScript, PHP, and MySQL.

## Features

- Manage teams, players, and coaches
- Schedule and track matches
- Update match results and player statistics
- Generate reports and analytics

## Prerequisites

- Web server (e.g., Apache, Nginx)
- PHP (version 7.0 or higher)
- MySQL database
- phpMyAdmin (recommended for database management)

## Installation

1. Clone the repository:

``
git clone https://github.com/anjalig18/football-management-system.git
``

2.Navigate to the project directory:

``
cd football-management-system
``

3. Import the SQL database file (`database.sql`) into your MySQL server using phpMyAdmin or the command line.

4. Configure the database connection settings in the `config.php` file located in the `includes` directory.

5. Move the project files to your web server's document root directory (e.g., `/var/www/html` for Apache on Linux).

## Running the Application

1. Open Visual Studio Code.

2. Click on "File" > "Open Folder" and select the project directory.

3. Install the Live Server extension in Visual Studio Code if you haven't already.

4. Right-click on the `index.html` file in the Explorer pane and select "Open with Live Server".

5. The application should now be running in your default web browser.

## Using phpMyAdmin

1. Open your web browser and navigate to `http://localhost/phpmyadmin` (or the appropriate URL for your server).

2. Enter your MySQL credentials when prompted.

3. You should now see the phpMyAdmin interface, where you can manage your databases, tables, and data.

4. To import the SQL database file, click on the "Import" tab, choose the `database.sql` file, and follow the prompts.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- [Bootstrap](https://getbootstrap.com/) for CSS framework
- [jQuery](https://jquery.com/) for JavaScript library
- [Chart.js](https://www.chartjs.org/) for data visualization
