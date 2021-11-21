<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEMify</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/add_exp.css" rel="stylesheet" />
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="home.html">
                <img src="img/logo.jpg" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="home.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Add Experiment
            </li>
        </ol>
    </nav>

    <form action="action_page.php">
        <div class="container">
            <div class = "row">
            <div class = "col-md-6">
                <img src = "img/science.png">
            </div>
            <div class="col-md-6">
                <h1>Add Experiment</h1>
                    <p>Are you someone having an amzing idea for a science experiment? 
                    <br/> Fill the form below and share your idea with us!</p>
                <hr>

                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter Title" name="title" id="title" required>

                <label for="subject"><b>Subject</b></label>
                <input type="text" placeholder="Enter Subject" name="subject" id="subject" required>

                <label for="description"><b>Description</b></label>
                <textarea name="description" id="description" required rows = "3" cols="50">
                    Write a small description of your experiment.
                </textarea>

                <button type="submit" class="Addexp">Submit</button>
            </div>
</div>
        </div>

    </form>