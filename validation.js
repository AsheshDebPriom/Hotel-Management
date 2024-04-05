function validateLoginForm() {
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();


    document.getElementById('emailError').innerHTML = "";
    document.getElementById('passwordError').innerHTML = "";

    var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var email = document.getElementById('email').value;

    if (email === "") {
        document.getElementById('emailError').innerHTML = "Email is required";
        return false;
    } else if (!pattern.test(email)) {
        document.getElementById('emailError').innerHTML = "Insert Valid Email";
        return false;
    }

    if (password === "") {
        document.getElementById('passwordError').innerHTML = "Password is required";
        return false;
    }
    return true;
}



function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();
    var cpassword = document.getElementById('cpassword').value.trim();
    var user_type = document.getElementById('user_type').value;

    document.getElementById('nameError').innerHTML = "";
    document.getElementById('emailError').innerHTML = "";
    document.getElementById('passwordError').innerHTML = "";
    document.getElementById('cpasswordError').innerHTML = "";

    if (name === "") {
        document.getElementById('nameError').innerHTML = "Name is required";
        return false;
    }

    var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var email = document.getElementById('email').value;

    if (email === "") {
        document.getElementById('emailError').innerHTML = "Email is required";
        return false;
    } else if (!pattern.test(email)) {
        document.getElementById('emailError').innerHTML = "Insert Valid Email";
        return false;
    }

    if (password === "") {
        document.getElementById('passwordError').innerHTML = "Password is required";
        return false;
    }

    if (cpassword === "") {
        document.getElementById('cpasswordError').innerHTML = "Confirm Password is required";
        return false;
    }

    if (password !== cpassword) {
        document.getElementById('cpasswordError').innerHTML = "Passwords do not match";
        return false;
    }
    return true;
}


function ReserveForm() {
    var name = document.getElementById('name').value.trim();
    var date = document.getElementById('date').value.trim();
    var time = document.getElementById('time').value.trim();


    document.getElementById('nameError').innerHTML = "";
    document.getElementById('dateError').innerHTML = "";
    document.getElementById('timeError').innerHTML = "";

    if (name === "") {
        document.getElementById('nameError').innerHTML = "Name is required";
        return false;
    }
    if (date === "") {
        document.getElementById('dateError').innerHTML = "Date is required";
        return false;
    }
    if (time === "") {
        document.getElementById('timeError').innerHTML = "Time is required";
        return false;
    }
    return true;
}

function Notice() {
    var name = document.getElementById('name').value.trim();


    document.getElementById('nameError').innerHTML = "";

    if (name === "") {
        document.getElementById('nameError').innerHTML = "The Notice is Blank!Please write something...";
        return false;
    }
    return true;
}

/*  <form id="loginForm" class="Log_form" action="login.php" method="post" novalidate>


<?php
                if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                    include 'login.php';
                } elseif (isset($_SESSION['emptyemail']) && $_SESSION['emptyemail']) {
                    echo "<p class='error-message'>Email and password are required!</p>";
                    $_SESSION['emptyemail'] = false;
                }
                ?>
                */