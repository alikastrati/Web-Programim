<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="\Web-Programim\src\logged-in\adminPages\global-styles.css">
        <link rel="stylesheet" href="\Web-Programim\src\logged-in\adminPages\user-dashboard-styles.css">
    </head>
    <body>
        
        <div class="mainContainer">

            <!-- LEFT PANEL  -->
           <?php 
                include('C:\xampp\htdocs\Web-Programim\src\logged-in\adminPages\global-dashboard.php');
           
           ?>





            <!-- RIGHT PANNEL  -->
            <div class="right-panel">
                
                    <h2>Add User</h2>    
                    
            <form class="user-form"  method="POST" action="submit.php"  target="_self">
            <fieldset>
                 <label for="text">Name:</label><br>
                 <input type="text" id="name" name="name"><br>
                 <label for="text">Username:</label><br>
                 <input type="text" id="username" name="username"><br>
                 <label for="password">Email:</label><br>
                 <input type="email" id="email" name="email"><br>
                 <label for="password">Password:</label><br>
                 <input type="password" id="password" name="password"><br>
                 <label for="text">Role:</label><br>
                 <input type="text" id="role" name="role"><br>
                 <button><a href="#">Add User</a></button>
            </fieldset>
            </form>
                    
                
                    </div>

                
                

                
        </div>


    </body>
    </html>