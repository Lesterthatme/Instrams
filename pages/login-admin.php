<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BASC Sports</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-amber-50 to-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-sm sm:max-w-md">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-amber-100">
            <div class="bg-gradient-to-r from-amber-500 to-amber-600 p-4 sm:p-5 text-center">
                <div class="flex justify-center mb-2 sm:mb-3">
                    <div class="relative">
                        <img class="h-14 w-14 sm:h-16 sm:w-16 rounded-full border-3 border-white shadow-md" src="../assets/img/BASC_sports_development_office.png" alt="Logo">
                        <div class="absolute -bottom-1 -right-1 h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-white flex items-center justify-center border-2 border-amber-500">
                            <i class="fas fa-lock text-amber-600 text-xs sm:text-sm"></i>
                        </div>
                    </div>
                </div>
                <h1 class="text-lg sm:text-xl font-bold text-white">Admin Login</h1>
                <p class="text-amber-100 mt-1 text-xs sm:text-sm">BASC Sports Development Office</p>
            </div>

            <div class="p-4 sm:p-5 md:p-6">
                <form action="../function/admin/log-in.php" method="POST" class="space-y-3 sm:space-y-4">
                    <div class="admin-form-group">
                        <label class="admin-form-label flex items-center gap-1 sm:gap-2 text-xs sm:text-sm">
                            <i class="fas fa-envelope text-amber-600 text-xs sm:text-sm"></i>
                            Email Address
                        </label>
                        <div class="relative mt-1">
                            <input type="text" name="email" class="admin-input pl-9 sm:pl-10 text-xs sm:text-sm h-9 sm:h-10" placeholder="admin@example.com">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-user text-xs sm:text-sm"></i>
                            </div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">Enter your admin email address</p>
                    </div>

                    <div class="admin-form-group">
                        <label class="admin-form-label flex items-center gap-1 sm:gap-2 text-xs sm:text-sm">
                            <i class="fas fa-key text-amber-600 text-xs sm:text-sm"></i>
                            Password
                        </label>
                        <div class="relative mt-1">
                            <input type="password" name="loginpassword" class="admin-input pl-9 sm:pl-10 text-xs sm:text-sm h-9 sm:h-10" placeholder="••••••••">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-lock text-xs sm:text-sm"></i>
                            </div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">Enter your admin password</p>
                    </div>

                    <button type="submit" name="login-submit-btn" class="w-full admin-btn-primary py-2.5 sm:py-3 text-xs sm:text-sm font-medium">
                        <i class="fas fa-sign-in-alt mr-1 sm:mr-2 text-xs sm:text-sm"></i>Sign In
                    </button>
                </form>

                <div class="mt-4 sm:mt-5 pt-3 sm:pt-4 border-t border-gray-200">
                    <div class="text-center">
                        <p class="text-gray-600 text-xs">
                            <i class="fas fa-shield-alt mr-1 text-xs"></i>
                            Secure Admin Access Only
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-3 sm:mt-4">
            <a href="../index.php" class="text-amber-600 hover:text-amber-700 font-medium flex items-center justify-center gap-1 text-xs sm:text-sm">
                <i class="fas fa-arrow-left text-xs"></i>
                Back to Sportsfest Homepage
            </a>
        </div>
    </div>

    <footer class="absolute bottom-3 sm:bottom-4 left-0 right-0 text-center">
        <p class="text-gray-600 text-xs">
            &copy; 2025 BSAU Sportsfest. Admin Panel v1.0
        </p>
    </footer>
</body>
</html>