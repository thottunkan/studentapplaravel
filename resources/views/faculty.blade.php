<!-- faculty_name dept addre phno quali college submit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Faculty</title>
</head>
<body>
<div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="welcome.blade.php">Student-App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Student</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="faculty">Faculty</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                    </li>
                    
                </ul>
                </div>
            </div>
            </nav>
        <!-- navbar end -->
        <div class="row" style="width: 500px;margin: auto;margin-top: 100px;" >
        
            <div class="col " style="border:.05px solid gray;border-radius: 5px;background-color:cornsilk;">
                <form action="/">
                    <table class="table table-borderless">
                        <thead>
                            <h3>Faculty</h3>
                        </thead>
                        <tr>
                            <td><label for="">Name</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">Department</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">Address</label></td>
                            <td>
                                <textarea  class="form-control" name="" id="" cols="30" rows="5">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Phno</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">College</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">Qualification</label></td>
                            <td>
                            <select id="quali" class="form-control">
                                <option value="">PHD</option>
                                <option value="">MCA</option>
                                <option value="">MSC DA</option>
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-primary form-control"></td>
                        </tr>
                       
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>