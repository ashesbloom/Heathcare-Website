<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .card-title {
            color: #ffc107;
        }

        .form-check-label {
            font-weight: bold;
        }

        .btn-primary {
            margin-top: 40px;
            background-color: #ffc107;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ffce63;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <form method="post" action="process.php">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="option1" name="choice" value="option1">
                            <label class="form-check-label" for="option1">
                                Sign in as a Patient
                            </label>
                        </div>

                        <div class="form-check" style="margin-top: 20px">
                            <input class="form-check-input" type="radio" id="option2" name="choice" value="option2">
                            <label class="form-check-label" for="option2">
                                Sign in as a Doctor
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
