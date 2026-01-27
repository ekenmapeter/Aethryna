<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Aethryna Foundation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center p-4">
    
    <!-- Background Decorations -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-64 h-64 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <!-- Error Content -->
    <div class="relative z-10 max-w-4xl w-full">
        <div class="text-center">
            
            <!-- 404 Number with Icon -->
            <div class="mb-8 floating">
                <div class="inline-flex items-center justify-center">
                    <span class="text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">4</span>
                    <div class="mx-4 relative">
                        <div class="w-32 h-32 bg-gradient-to-br from-teal-500 to-blue-600 rounded-full flex items-center justify-center shadow-2xl pulse-slow">
                            <i class="fas fa-compass text-white text-5xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center shadow-lg">
                            <i class="fas fa-exclamation text-white text-sm"></i>
                        </div>
                    </div>
                    <span class="text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">4</span>
                </div>
            </div>

            <!-- Error Message -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Oops! Page Not Found
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                The page you're looking for seems to have wandered off the path. Let's get you back on track to your learning journey.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="/" class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-teal-600 to-blue-600 text-white font-bold rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <i class="fas fa-home mr-2"></i>
                    Back to Home
                    <div class="absolute inset-0 rounded-full bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
                </a>
                
                <button onclick="window.history.back()" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-700 font-bold rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 border-2 border-gray-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
            </div>

            <!-- Helpful Links -->
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-2xl mx-auto">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center justify-center">
                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                    Helpful Links
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="/assessment" class="group p-4 rounded-xl hover:bg-teal-50 transition-colors border border-gray-100">
                        <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-teal-200 transition-colors">
                            <i class="fas fa-clipboard-list text-teal-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-1">Take Assessment</h3>
                        <p class="text-sm text-gray-500">Find your pathway</p>
                    </a>
                    
                    <a href="/pathways" class="group p-4 rounded-xl hover:bg-blue-50 transition-colors border border-gray-100">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-200 transition-colors">
                            <i class="fas fa-route text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-1">View Pathways</h3>
                        <p class="text-sm text-gray-500">Explore options</p>
                    </a>
                    
                    <a href="/login" class="group p-4 rounded-xl hover:bg-purple-50 transition-colors border border-gray-100">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-200 transition-colors">
                            <i class="fas fa-sign-in-alt text-purple-600 text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-1">Login</h3>
                        <p class="text-sm text-gray-500">Access your account</p>
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-12 text-gray-500 text-sm">
                <p>Need help? <a href="mailto:support@aethryna.org" class="text-teal-600 hover:text-teal-700 font-semibold">Contact Support</a></p>
            </div>
        </div>
    </div>

</body>
</html>
