
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
  <h1>Student Result Management System</h1>

  <p>Student Result Management System (SRMS) is a web-based application developed using PHP and MySQL. It provides a platform for managing student details and their academic results. This README provides an overview of the project, installation instructions, and usage guidelines.</p>

  <h2>Table of Contents</h2>
  <ul>
    <li><a href="#features">Features</a></li>
    <li><a href="#requirements">Requirements</a></li>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#screenshots">Screenshots</a></li>
  </ul>

  <h2 id="features">Features</h2>
  <h3>Admin Module</h3>
  <ul>
    <li>Admin dashboard for managing classes, subjects, students, results, notices, and passwords.</li>
    <li>Add, update, or delete classes and subjects.</li>
    <li>Register new students and edit their information.</li>
    <li>Declare or edit results for students.</li>
    <li>Add or delete notices.</li>
    <li>Check a feedback.</li>
  </ul>

  <h3>Student Module</h3>
  <ul>
    <li>Search for results using a valid roll ID.</li>
    <li>View notices.</li>
    <li>Send a feedback.</li>
    
  </ul>

  <h2 id="requirements">Requirements</h2>
  <ul>
    <li>PHP 5.6 or higher</li>
    <li>MySQL 5.x</li>
    <li>Web Browser: Mozilla Firefox, Google Chrome, Internet Explorer 8, Opera</li>
    <li>Software: XAMPP, WAMP, MAMP, LAMP (or similar)</li>
  </ul>

  <h2 id="installation">Installation</h2>
  <ol>
    <li>Clone the repository to your local machine:</li>
  </ol>
  <code>git clone https://github.com/parshwakonire/student-result-management-system.git</code>
  <ol start="2">
    <li>Import the <code>srms.sql</code> file into your MySQL database to create the necessary tables and populate initial data.</li>
    <li>Configure the database connection settings in <code>config.php</code> located in the <code>includes</code> directory.</li>
    <li>Start your local server environment (XAMPP, WAMP, MAMP, LAMP).</li>
    <li>Open the project in your web browser by navigating to <code>http://localhost/student-result-management-system</code>.</li>
  </ol>

  <h2 id="usage">Usage</h2>
  <ul>
    <li>Access the application through the web browser.</li>
    <li>Log in as an admin to manage classes, subjects, students, results, notices, and passwords.</li>
    <li>Log in as a student to search for results and view notices.</li>
    <li>Admin Username <code>admin</code> and password is <code>Test@123</code></li>
    <li>We have 3 Falculty's Username is 
    <code>hod.science</code>
    <code>hod.commerce</code>
    <code>hod.arts</code>
    The password has <code>Pass@123</code></li>
  </ul>

  <h2 id="contributing">Contributing</h2>
  <p>Contributions are welcome! If you'd like to contribute to this project, please follow these guidelines:</p>
  <ol>
    <li>Fork the repository.</li>
    <li>Create a new branch (<code>git checkout -b feature/yourfeature</code>).</li>
    <li>Make your changes and commit them (<code>git commit -am 'Add new feature'</code>).</li>
    <li>Push your changes to the branch (<code>git push origin feature/yourfeature</code>).</li>
    <li>Create a pull request.</li>
  </ol>

  <h2 id="license">License</h2>
  <p>This project is licensed under the <a href="LICENSE">MIT License</a>.</p>

  <!-- Add Images -->
  <h2 id="screenshots">Screenshots</h2>
  <h4>Index Page</h4>
  <img src="images/Screenshot/hero .png" alt="Main Page">
<br>  
<h4>Notice Board</h4>
  <img src="images/Screenshot/notice.png" alt="Admin Dashboard">
<br>  
<h4>Result Section</h4> 

  <img src="images/Screenshot/result.png" alt="Student Result Page">
  <br>  
<h4>Enqurie Box</h4>
  <img src="images/Screenshot/end.png" alt="Student Result Page">
  <br>  
<h4>Admin Dashboard</h4>
  <img src="images/Screenshot/admin.png" alt="Student Result Page">

  <br>  
<h4>Faculty Dashboard</h4>
  <img src="images/Screenshot/faculty.png" alt="Student Result Page">
</body>
</html>
