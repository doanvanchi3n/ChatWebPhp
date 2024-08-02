<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatAPp</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-detail">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>PassWord</label>
                    <input type="password" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to chat">
                </div>
            </form>
            <div class="link">Already signed in ?<a href="#">Login now</a></div>
        </section>
    </div>
    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/signup.js"></script>
</body>
</html>