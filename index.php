
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="body-bg">
    <div class="container search-form">
        <div class="topsection">
            <h1>Welcome To Queeny Limited</h1>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Search Student</button>
        </div>


        <div id="id01" class="modal">
  
          <form class="modal-content animate" action="searchActionProcess.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="https://queenybd.com/wp-content/uploads/2023/09/Queeny-Pink-150x86.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="id"><b>Student ID</b></label>
              <input type="text" placeholder="Enter Student ID" name="search_student_id" required>

              <label for="name"><b>Student Name</b></label>
              <input type="text" placeholder="Enter Student Name" name="search_student_name" required>
                
              <input class="searchbtn" type="submit" name="search" value="Search">
            </div>

            <!-- <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div> -->
          </form>

        </div>





        <!-- <form method="post" action="searchActionProcess.php">
            <table>
            Search Student by ID: <input type="text" name="search_student_id" required><br>
            Search Student by Name: <input type="text" name="search_student_name" required><br>
            <input type="submit" name="search" value="Search">
            </table>
        </form> -->



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

  </body>
</html>