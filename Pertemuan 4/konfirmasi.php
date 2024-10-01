<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-danger">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-5 mt-4 ">
            <div class="card shadow-sm">
                <div class="card-body">
                    <?php
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $phone = htmlspecialchars($_POST['phone']);
                        $message = htmlspecialchars($_POST['message']);

                        
                        echo "<div class='alert alert-success' role='alert'>";
                        echo "<h1 class='display-5'>Thank You, " . $name . "!</h1>";
                        echo "<p class='lead'>We have received your message:</p>";
                        echo "<blockquote class='blockquote'>" . $message . "</blockquote>";
                        echo "<hr>";
                        echo "<p>We will get back to you at <strong>" . $email . "</strong> or call you at <strong>" . $phone . "</strong>.</p>";
                        echo "<p>Have a great day!</p>";
                        echo "</div>";
                    } else {
                        
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "<h1 class='display-6'>Access Denied</h1>";
                        echo "<p>You need to submit the form first.</p>";
                        echo "</div>";
                    }
                    ?>
                    
                    <a href="index.html" class="btn btn-danger mt-4">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
