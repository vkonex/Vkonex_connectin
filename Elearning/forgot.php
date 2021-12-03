<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot-password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,100&display=swap');
    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    h3 {
        margin-top: 30px;
        color: #3f51b5;
    }

    h5 ,p{
        
        color: #3f51b5;
    }

    img {
        margin-top: 50px;
    }

    .btn {
        background-color: #3f51b5;
        color: #fff;
    }

    .btn:hover {
        background-color: orangered;
        color: #fff;
        outline: none;
    }

    .form-control {
        display: inline;
        justify-content: center;
        align-items: center;
        width: fit-content;
        width: 25rem;
        height: 4rem;
        border: none;
        box-shadow: 0 4px 8px 0 #ecf0f1;
    }

    .main {
        background-color:#fcfbfb;
        box-shadow: 0 4px 8px 0 #ecf0f1;
        padding-top: 20px;
        width: 500px;
        height: 300px;
    }
        
        @media (max-width:480px) {
            h3
            {
             margin-left: 50px;
            }
            img
            {
                margin-left: 50px;   
            }
        }
</style>
<body class="text-center">
    <form class="">
        <img src="images/logo.png" class=" img-fluid" width="150px">
        <h3>Vkonex-Online tutoring software</h3>
        <center>
            <div class="main ">
                <div class="form-group mt-5">
                    <h5><label for="exampleInputEmail1">Forgot Password</label></h5>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-lg">Submit</button>
                <a><p class="mt-3"><a href="login.php">Login</a></p></a>
    </form>
    </div>
    </center>
     <!-- js -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
     integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
     crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
     crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
     crossorigin="anonymous"></script>
</body>
</html>