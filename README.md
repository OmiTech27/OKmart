# OKmart Dynamic E-commerce WebSite using PHP
- This website is built with PHP, HTMl, CSS, JavaScript, and MySQL using XAMPP server.

# Running a PHP Project on XAMPP

XAMPP is a popular cross-platform web server solution stack that includes Apache, MySQL, PHP, and Perl. It's widely used for developing and testing web applications locally before deploying them to a live server.

## Prerequisites

Before running your PHP project on XAMPP, make sure you have the following:

- XAMPP installed on your system. If not, download it from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) and follow the installation instructions for your operating system.
- Your PHP project files ready to be served by XAMPP.

## Setting Up Your PHP Project

1. **Navigate to XAMPP's htdocs directory:** Locate the `htdocs` directory inside your XAMPP installation folder. This is where you'll place your PHP project files.

2. **Copy your project files:** Copy all files and directories of your PHP project into the `htdocs` directory. You can create a new directory inside `htdocs` for your project if needed.

3. **Start XAMPP:** Follow the instructions mentioned in the XAMPP README or documentation to start Apache and MySQL servers.

## Accessing Your PHP Project

Once XAMPP is running and your project files are placed in the `htdocs` directory, you can access your PHP project through a web browser.

- **URL:** Open your web browser and navigate to [http://localhost/your_project_directory](http://localhost/your_project_directory), where `your_project_directory` is the directory name where you copied your project files.

## Database Configuration (if applicable)

If your PHP project interacts with a MySQL database, you can use phpMyAdmin, which is included with XAMPP, to manage your databases.

- **Access phpMyAdmin:** Open your web browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin). Log in using the default username `root` and leave the password field blank.

- **Import your database:** If your project requires a database, you can import it into phpMyAdmin by selecting the "Import" option and choosing your SQL file.

## Stopping XAMPP

Remember to stop XAMPP when you're finished using it to free up system resources.

- Follow the instructions provided in the XAMPP README or documentation to stop Apache and MySQL servers.

## Additional Resources

- [XAMPP Documentation](https://www.apachefriends.org/docs/)
- [PHP Documentation](https://www.php.net/docs.php)

## License

XAMPP is distributed under the Apache License 2.0. For more information, see the LICENSE file in the XAMPP installation directory.
