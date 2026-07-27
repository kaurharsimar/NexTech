# 🚀 NexTech - Technical Club Website

A modern and responsive technical club website built using **PHP, MySQL, HTML, CSS, and JavaScript**. The website serves as a platform for students to explore club activities, register as members, and participate in technical events and hackathons.

## 🌐 Live Demo

**Website:** https://chotu.free.nf

---

# 📌 Features

- 🎨 Modern and responsive UI
- ⚡ Smooth animations and interactive effects
- 🖱️ Custom animated cursor
- ✨ Particle effects
- 📱 Fully responsive design
- 👥 Club membership registration
- 🏆 Event & Hackathon registration
- 📅 Upcoming events section
- 👨‍💻 Projects showcase
- 👨‍🎓 Team members section
- 💾 MySQL database integration
- 🔒 Secure form submission using PHP PDO
- 📧 Email validation
- 🚀 AJAX-based form submission (No page refresh)

---

# 🛠️ Tech Stack

### Frontend

- HTML5
- CSS3
- JavaScript

### Backend

- PHP

### Database

- MySQL

### Server

- XAMPP / Apache

---

# 📂 Project Structure

```
NexTech/
│
├── index.php
├── style.css
├── script.js
├── db_connect.php
├── register.php
├── submit_club.php
├── submit_event.php
├── database.sql
│
├── assets/
│   ├── images
│   └── icons
│
└── README.md
```

---

# ⚙️ Installation

## 1. Clone the repository

```bash
git clone https://github.com/yourusername/nextech.git
```

## 2. Move the project

Copy the project folder to:

```
xampp/htdocs/
```

## 3. Import Database

Open **phpMyAdmin**

Create a database.

Example:

```
nextech
```

Import

```
database.sql
```

## 4. Configure Database

Open

```
db_connect.php
```

Update

```php
$host = "localhost";
$dbname = "nextech";
$username = "root";
$password = "";
```

## 5. Start Apache & MySQL

Open XAMPP and start

- Apache
- MySQL

Visit

```
http://localhost/NexTech
```

---

# 📸 Website Sections

- Home
- About
- Events
- Projects
- Team
- Join Club
- Register for Events
- Contact

---

# 📊 Database Tables

## club_members

Stores club registration details.

Fields include:

- Name
- Email
- Phone
- Department
- Year
- Skills
- Interest
- Reason for joining

---

## event_registrations

Stores hackathon registrations.

Fields include:

- Name
- Email
- Team Name
- Team Members
- Skills
- Project Idea

---

# 🔄 Project Workflow

```
Visitor
   │
   ▼
Frontend Website
   │
   ▼
Registration Form
   │
   ▼
AJAX Request
   │
   ▼
PHP Backend
   │
   ▼
MySQL Database
   │
   ▼
Success Response
```

---

# 🔒 Security Features

- Prepared Statements (PDO)
- SQL Injection Protection
- Input Validation
- Email Validation
- Server-side Validation

---

# 📈 Future Improvements

- User Authentication
- Admin Dashboard
- Event Management Panel
- Email Notifications
- Certificate Generation
- Attendance Management
- Analytics Dashboard
- Dark Mode
- Multi-language Support

---

# 🤝 Contributing

Contributions are welcome!

1. Fork the repository
2. Create a new branch

```bash
git checkout -b feature-name
```

3. Commit your changes

```bash
git commit -m "Add feature"
```

4. Push the branch

```bash
git push origin feature-name
```

5. Open a Pull Request

---

# 📄 License

This project is licensed under the MIT License.

---

# 👨‍💻 Author

**Aayush**

B.Tech Artificial Intelligence & Machine Learning Student

GitHub: https://github.com/yourusername

---

⭐ If you found this project helpful, don't forget to give it a star!
