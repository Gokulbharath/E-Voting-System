![image](https://github.com/user-attachments/assets/280c63df-6825-4a5d-b163-c926eb074393)## Overview
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


## Screenshots
Include some screenshots to demonstrate the UI of the online voting system (home page, voting page, admin panel).
![admin](https://github.com/user-attachments/assets/5c4909f1-49f2-4b63-b317-b5b2bc49f172)
