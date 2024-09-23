## Overview
This **Online Voting System** allows users to register, log in, and vote for candidates in a secure and simple interface. It includes an admin section to manage candidates and view voting results. The system is built using **HTML**, **CSS**, **JavaScript**, and **PHP** with a MySQL database for storing votes and user details.

## Features
- User registration and login system
- Secure voting mechanism
- Admin panel to add and manage candidates
- Results page displaying real-time voting results
- Prevents multiple votes by the same user
- Responsive design

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Development Environment:** XAMPP / WAMP

## Installation
### Prerequisites
- XAMPP/WAMP or any local PHP server
- MySQL database

### Steps to Setup
1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/online-voting-system.git
    ```

2. Move the project folder to your server's root directory (`htdocs` for XAMPP, `www` for WAMP).

3. Create a MySQL database:
    - Open **phpMyAdmin** from your XAMPP/WAMP control panel.
    - Create a new database named `voting_system`.
    - Import the SQL file (`voting_system.sql`) included in the project to create the necessary tables (users, candidates, votes).

4. Update the database connection in `config.php`:
    ```php
    $host = 'localhost';
    $user = 'root';  // default user for XAMPP/WAMP
    $password = '';  // leave it blank for XAMPP
    $dbname = 'voting_system';
    ```

5. Start your server and navigate to `http://localhost/online-voting-system` to access the website.

## Usage
- **User Login/Registration:**
    - Register as a user and log in to access the voting page.
    - Users can only vote for one candidate and cannot change their vote after submission.

- **Admin Panel:**
    - Log in as the admin using the credentials:
        - Username: `admin`
        - Password: `123`
    - The admin can add new candidates, view votes, and see the election results.

## Project Structure
online-voting-system/ │ ├── config.php # Database connection ├── index.html # Main homepage ├── register.php # Registration page ├── login.php # User login ├── vote.php # Voting page ├── results.php # Results page ├── admin/ │ ├── admin-login.php # Admin login page │ ├── dashboard.php # Admin dashboard │ ├── add-candidate.php # Admin add candidates │ └── view-results.php # Admin view results └── assets/ ├── css/ # CSS files └── js/ # JavaScript files

Login page
![login](https://github.com/user-attachments/assets/6afd384b-7280-408e-94ee-ef56b56550d4)

Dashboard
![dashboard](https://github.com/user-attachments/assets/cd6dfa83-8332-484f-b479-db383f271b25)

Canditate
![candidate](https://github.com/user-attachments/assets/78220f7b-6c8b-4adf-b23e-03ad6f3332a8)

Voting
![vote](https://github.com/user-attachments/assets/4e1e7c4d-116b-4010-b4e2-59cdaf65b7b5)

Admin Login
![admin](https://github.com/user-attachments/assets/8e2a91a8-5ecc-480c-8e74-5d8535a8aee0)

result
![result](https://github.com/user-attachments/assets/a58ca5eb-4937-4e94-818c-f466bf45cb2e)




