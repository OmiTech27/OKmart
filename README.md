# Okmart E-commerce Website

Welcome to the Okmart E-commerce Website project! This is a PHP-based e-commerce website built using HTML, CSS, JavaScript, and MySQL. Follow the instructions below to set up and run the project on your local XAMPP server.

## Prerequisites

- XAMPP installed on your system. If not, follow the installation guide below.

## XAMPP Installation Guide

1. **Download XAMPP:**
   - Go to the official XAMPP website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
   - Download the XAMPP installer for your operating system (Windows, macOS, or Linux).

2. **Run the Installer:**
   - Windows:
     - Double-click the downloaded installer file (`xampp-windows-x64-x.x.x-x-installer.exe`).
     - Follow the installation wizard instructions.
     - Choose the components you want to install (Apache, MySQL, PHP, etc.).
     - Select the installation directory (default is `C:\xampp`).
     - Click "Next" and then "Finish" to complete the installation.
   - macOS:
     - Double-click the downloaded DMG file (`xampp-osx-x.x.x-x-installer.dmg`).
     - Drag the XAMPP folder to your "Applications" directory.
     - Open the XAMPP Control Panel from the Applications folder.
   - Linux:
     - Open a terminal.
     - Navigate to the directory where the downloaded installer file is located.
     - Run the following command to make the installer executable: `chmod +x xampp-linux-x64-x.x.x-x-installer.run`
     - Run the installer with sudo: `sudo ./xampp-linux-x64-x.x.x-x-installer.run`
     - Follow the installation wizard instructions.

3. **Start XAMPP:**
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL servers by clicking on the "Start" buttons next to them.
   - Optionally, you can also start other services like PHPMyAdmin.

## Getting Started with Okmart E-commerce Website

1. **Clone the Repository:** Clone this repository to your local machine using Git or download it as a ZIP file and extract it.

2. **Navigate to Project Directory:** Open a terminal or command prompt and navigate to the directory where you've cloned or extracted the project files.

3. **Copy to XAMPP htdocs Directory:** Copy all project files and directories to the `htdocs` directory of your XAMPP installation. The `htdocs` directory is typically located at `C:\xampp\htdocs` on Windows, `/Applications/XAMPP/htdocs` on macOS, or `/opt/lampp/htdocs` on Linux.

4. **Start XAMPP:** Launch the XAMPP Control Panel and start the Apache and MySQL servers.

5. **Import MySQL Database:**
   - Open your web browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Log in using the default username `root` and leave the password field blank.
   - Create a new database named `okmart` or choose an existing database where you want to import the data.
   - Click on the `Import` tab in the top navigation menu.
   - Choose the MySQL database file (`okmart.sql`) located in the project's `database` directory.
   - Click on the `Go` button to import the database.

6. **Configure Database Connection:** Open the `config.php` file located in the project's root directory and update the database connection settings if necessary. By default, it uses `localhost`, `root` as the username, and no password for the MySQL database.

7. **Access the Website:** Open your web browser and navigate to [http://localhost/okmart](http://localhost/okmart) to access the Okmart E-commerce Website.

## Screenshots

Insert screenshots of your project here to showcase its appearance and functionality.

## Features

- List the key features of your Okmart E-commerce Website project.

## Directory Structure

Provide a brief overview of the project's directory structure.


## Contributing

If you'd like to contribute to this project, please follow the standard GitHub workflow:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/your-feature`).
6. Create a new Pull Request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

- Acknowledge any third-party libraries, resources, or tutorials used in your project.
