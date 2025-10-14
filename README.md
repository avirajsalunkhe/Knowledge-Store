# 📚 Knowledge Store – Library Management System

> A complete **PHP & MySQL-powered Library Management System** that helps institutions manage books, students, and notices efficiently.  
> Includes dedicated portals for **Admins**, **Students**, and **Faculty** with secure login and email notifications.

---

## 📊 Project Overview

[![Language](https://img.shields.io/badge/Language-PHP-blue)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-orange)](https://www.mysql.com/)
[![Status](https://img.shields.io/badge/Status-Active-success)](#)

This project provides a **full-stack library management solution** where:
- **Admins** can add/update books, manage users, and publish notices.
- **Students** can request books, view notices, and manage profiles.
- **Automated Emails** keep users updated on account changes and book activities.

---

## ✨ Key Features

- **📖 Book Management** – Add, update, delete, and search books.
- **👨‍💼 Admin Dashboard** – Centralized control for managing all library data.
- **🎓 Student Portal** – Request books, check issued books, and read notices.
- **📢 Notice Board** – Digital notice display for students.
- **📧 Email Notifications** – Integrated with PHP Mailer for account & book updates.
- **🔒 Secure Authentication** – Separate login for Admin, Student, and Faculty.
- **🗄️ Database Integration** – MySQL-based data storage.

---

## 🖥️ Tech Stack

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Email Service:** PHP Mailer
- **Server:** Apache (XAMPP/WAMP)

---

## 📂 Project Structure

```
library management/
│
├── Database file/
│   └── library_management (1).sql
│
├── admin_webpage/          # Admin control panel
│   ├── account_update_mail.php
│   ├── add_book.php
│   ├── admin_dashboard.php
│   ├── admin_login.php
│   ├── book_management_files...
│
├── student_webpage/        # Student portal
│   ├── student_dashboard.php
│   ├── request_book.php
│   ├── student_login.php
│   ├── profile_management_files...
│
├── common_webpage/         # Public pages
│   ├── about_us.php
│   ├── gallery.php
│   ├── home.php
│
├── dbconnection.php        # Database connection
├── assets/                 # Images & icons
│   ├── logo.jpg
│   ├── loader.gif
│   ├── Default.png
```

---

## 📷 Screenshots

> *(Replace these with actual images from your project)*

**Admin Dashboard**
![Admin Dashboard](screenshots/admin_dashboard.png)

**Student Portal**
![Student Portal](screenshots/student_portal.png)

---

## ⚡ Installation Guide

1. **Clone Repository**
   ```bash
   git clone https://github.com/avirajsalunkhe/Knowledge-Store.git
   ```

2. **Import Database**
   - Open phpMyAdmin
   - Create a new database (e.g., `library_management`)
   - Import the SQL file:  
     `/Database file/library_management (1).sql`

3. **Configure Database**
   - Open `dbconnection.php`
   - Update MySQL credentials (username, password, db name)

4. **Run Locally**
   - Move project folder to `htdocs` (XAMPP) or `www` (WAMP)
   - Start Apache & MySQL
   - Visit:
     ```
     http://localhost/library%20management/admin_webpage/admin_login.php
     ```

---

## 🤝 Contribution

Contributions are welcome!  
If you find bugs or want to add features:
1. Fork the repository
2. Create a new branch (`feature-new`)
3. Commit changes
4. Create a Pull Request

---

## 📜 License:

This project is licensed under the **MIT License** – you can freely use and modify it.

---

## 👤 Author :

**Aviraj Salunkhe**  
📧 [avirajsalunkhe1@gmail.com](mailto:avirajsalunkhe1@gmail.com)  
🌐 [GitHub Profile](https://github.com/avirajsalunkhe)
