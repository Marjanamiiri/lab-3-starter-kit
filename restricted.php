<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == false) {
    // Redirect guest users to the login page
    $_SESSION['error'] = 'Access to this page is restricted to authenticated users. Please log in.';
    header('Location: login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>restricted</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <h2 class="text-3xl font-bold text-gray-900">Welcome to the Restricted Page</h2>
                <p class="mt-2 text-sm text-gray-600">This page is only accessible to authenticated users.</p>
                <p class="mt-2 text-sm text-gray-600">Email: <?php echo $_SESSION['email']; ?></p>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
        </div>
    </div>
</body>
</html>
