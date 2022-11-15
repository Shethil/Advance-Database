<html>

    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
   </style>
   </head>
    
    <body >

    <section>

    <div class="container py-5 h-100">

    <h2 style="text-align:center;">Login As Admin</h2> 

        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            
            
        <img src="../Photo/login.svg" class="img-fluid" alt="Phone image">

        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">


            <form  class="form-group" method="post" action="../controller/u_loginCheck.php">
            

            <!-- User Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="name" placeholder="Enter Your Username" class="form-control form-control-lg">
                <label class="form-label" >Name</label>
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password"  placeholder="Enter Your Password" class="form-control form-control-lg">
                <label class="form-label">Password</label>
            </div>


            <!-- Submit button -->
             <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        </div>
    </div>
    </section>
        </body>
</html>