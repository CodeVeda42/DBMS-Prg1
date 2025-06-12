# DBMS-Prg1 🌐💾

A web-based mini project built for a Database Management Systems (DBMS) course using PHP, MySQL (SQL), HTML, CSS, and JavaScript — hosted on a local XAMPP server. This project demonstrates basic CRUD operations and integration between frontend and backend technologies.

---

## 🚀 Technologies Used

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (via phpMyAdmin)  
- **Server:** XAMPP (Apache + MySQL)

---

## 📁 Project Structure

```
DBMS-Prg1/
│
├── index.html / index.php           # Entry point for the web app
├── auth.php / login.php             # Login authentication scripts
├── add_student.php / edit.php       # PHP files for CRUD operations
├── db.php                           # Database connection file
│
├── assets/                          # CSS, JavaScript files
│   ├── style.css
│   └── script.js
│
├── sql/                             # SQL schema and seed data
│   ├── schema.sql
│   └── data.sql
│
└── README.md                        # Project overview (this file)
```


---

## 🎯 Features

- User authentication (basic login system)
- Student management (Add, View, Edit, Delete)
- Responsive UI using HTML/CSS
- Server-side validation using PHP
- Data stored and retrieved from MySQL
- Hosted locally with XAMPP

---

## 🛠️ Setup Instructions

### Step 1: Install XAMPP
Download and install XAMPP: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

### Step 2: Start Apache and MySQL
Open XAMPP Control Panel and start both **Apache** and **MySQL**.

### Step 3: Setup Database
1. Open `phpMyAdmin` via [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Create a database (e.g., `student_db`)
3. Import the `sql/schema.sql` and `sql/data.sql` files

### Step 4: Configure Project
1. Clone or download this repo into your `htdocs` folder:
2. Update `db.php` with your database credentials (usually `root` with no password by default)

### Step 5: Run the App
Go to [http://localhost/DBMS-Prg1](http://localhost/DBMS-Prg1) in your browser.

---

---

## 📸 Screenshots

![image](https://github.com/user-attachments/assets/7677cea4-a1bf-4075-93e6-22f7d2ffc311)
![image](https://github.com/user-attachments/assets/895cdd65-f370-4b1f-9ab9-2669ec38e495)
![image](https://github.com/user-attachments/assets/6bd87bb1-86d5-4ec2-a1f3-f36c3c75b929)

---

## 🤝 Contributing

Feel free to fork this project and submit pull requests for improvements or new features.

---

## 📜 License

This project is open source and free to use under the [MIT License](LICENSE).

---

## 📬 Contact

For questions or collaborations:
**Your Name** – [socialmediacc1995@gmail.com]

Happy coding! 💻🧠
