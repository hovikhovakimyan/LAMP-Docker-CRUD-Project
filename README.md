# Simple LAMP Stack CRUD Application

This is a basic CRUD (Create, Read, Update, Delete) application built using the LAMP (Linux, Apache, MySQL, PHP) stack.

## Setup

1. Clone this repository to your local machine.

2. Ensure you have Docker installed on your system.

3. Navigate to the project directory and run:

   ```
   docker-compose up -d
   ```

4. The application should now be running. Access it through your web browser at:

   ```
   http://localhost
   ```

5. To access phpMyAdmin, go to:

   ```
   http://localhost:8001
   ```

   Use the following credentials:
   - Server: db
   - Username: php_docker
   - Password: password

## File Structure

- `index.php`: Main application file
- `update.php`: Handles record updates
- `delete.php`: Handles record deletion
- `db.php`: Database connection file

## Video Demo
A demo of the application can be view here https://www.youtube.com/watch?v=AZ5WNZPQU1g
