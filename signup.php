
<!DOCTYPE html>
<html>
<head>
    <title>Registration From</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
  
    <body>
       
    <div class="simple-from">
        <form id="registration" action="registration.php" method="POST">
           
               <h1><bl>Student Registration From</bl></h1>
              
           <label>Name:</label><br>
        <input type="text" name="fname" id="fname" placeholder="Name" size="30" required><br><br>
       <label>ID:</label><br>
        <input type="text" name="id" id="id" placeholder="ID" required><br><br>
         <label>Phone Number:</label><br>
            <select id="ph">
            <option>+008</option>
                <option>+91</option>
                <option>+90</option>
                <option>+92</option>
                <option>+92</option>
            </select>
        <input type='number' name="number" id="num" placeholder="Phone number" required><br><br>
          <label>Email Address:</label><br>
        <input type='text' name="email" id="email" placeholder="Email" size="30" required><br><br>
       <label>password:</label><br>
        <input type="password" name="password" id="pass" placeholder="Password" required><br><br>
            <label>Confirm password:</label><br>
        <input type="password" name="pass" id="cpass" placeholder="Password" required><br><br>
            <label> Permanent Address:</label><br>
            <textarea id="Permanent Address" rows="1" placeholder="Permanent Address" cols="25"required></textarea><br><br>
        <label> present Address: </label><br>
            <textarea id="present Address" rows="1" placeholder="present Address" cols="25"required></textarea><br><br>
        <label> Date of brith: </label>
            <input type="date" name="dob" id="dob" placeholder="" required><br><br>
            <label> Course Title: </label>
            <select id="course" >
            <option>Bsc in Computer Science Engineering  </option>
                 <option>Bsc in  Electrical Engineering </option>
                 <option>Bsc in Software Engineering </option>
                 <option>Bsc in Civil Engineering </option>
            </select><br><br>
         
              <label>Gender:</label>
         <input type="radio" name="sex" value="male"required>
             <label>Male</label>
    <input type="radio" name="sex" value="female"required>
             <label>Female</label>
             <input type="radio" name="sex" value="other"> 
             <label>Other</label> <br><br>
           
              
                  
        <input type="submit" value="Sign Up">
            <div id="container" >
                Do you have an acount?<a href="Login.php" >&nbsp;Sign In</a> 
            </div>
                                                           
        </form>
        </div>
    </body>
          
</html>