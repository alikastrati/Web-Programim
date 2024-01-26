    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="dashboard-styles.css">
    </head>
    <body>
        
        <div class="mainContainer">

           <!-- LEFT PANEL  -->
       <?php
       include('global-dashboard.php');
       ?>






            <!-- RIGHT PANNEL  -->
            <div class="right-panel">
                    <form action="#" id="dashboard-form">
                        <div class="registered-users">
                        <label for="">Total Users</label>
                        
                        </div>


                        <div class="active-users">
                            <label for="">Active Users</label>
                        
                        </div>
                    </form>

                
            </div>
        </div>


    </body>
    </html>