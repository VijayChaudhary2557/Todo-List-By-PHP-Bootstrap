# 📝 Todo List using PHP & Bootstrap

This is a simple **To-Do List application** built with **Core PHP** and styled using **Bootstrap**. It allows users to add, edit, delete, and manage tasks in a clean, responsive interface. It’s ideal for beginners learning CRUD operations in PHP with MySQL.

---

## 🚀 Tech Stack

- **Frontend:** HTML, CSS, Bootstrap  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** Apache (WAMP/XAMPP)

---

## ✨ Features

- Add new tasks
- Edit existing tasks
- Delete tasks
- Mark tasks as complete (if implemented)
- Clean and responsive design using Bootstrap

---

## 📁 File Structure

```bash
Todo-List-By-PHP-Bootstrap/
├── index.php → Main task view page
├── insert.php → Handles adding tasks
├── update.php → Handles updating tasks
├── delete.php → Handles deleting tasks
├── db.php → Database connection
├── style.css → Custom styles (if any)
└── todo.sql → SQL file to create the database
```


---

## 🛠️ Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/VijayChaudhary2557/Todo-List-By-PHP-Bootstrap.git
```

### 2. Setup the Database

- Open phpMyAdmin
- Create a new database (e.g., todo_app)
- Create todo table using this SQL command

```bash
CREATE TABLE `todo` (
  `id` int(11) Primary Key AUTO_INCREMENT,
  `title` varchar(5000) NOT NULL,
  `done` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```


### 3. Run the App
- Place the project folder inside the www or htdocs directory
- Open your browser and visit:

```bash
http://localhost/Todo-List-By-PHP-Bootstrap/
```

## 📸 Screenshots

![Screenshot 2024-08-01 201219](https://github.com/user-attachments/assets/5d68c370-e906-4590-a8a4-f7debedd6c04)

![Screenshot 2024-08-01 201231](https://github.com/user-attachments/assets/04dbb048-20a9-4280-8765-86badb307cad)

![Screenshot 2024-08-01 201248](https://github.com/user-attachments/assets/6ec7cad1-71eb-4a34-b725-69b9f338f5cd)

![Screenshot 2024-08-01 201324](https://github.com/user-attachments/assets/c8f55270-5d4b-462c-a9d9-62985140b846)

![Screenshot 2024-08-01 201337](https://github.com/user-attachments/assets/3145ec00-05d3-4985-abcd-574b8ac0038e)

![Screenshot 2024-08-01 201409](https://github.com/user-attachments/assets/9dc5ac14-6262-447a-bf98-53a4d3a63dc4)


## Deploy Link
https://todo-list-by-php-bootstrap.onrender.com/
