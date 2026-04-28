<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Green Intelligence - AI for Agro-Industry & Eco-Tourism')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js for data visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-light': '#34d399',
                        'earth-brown': '#92400e',
                        'tech-blue': '#3b82f6',
                        'nature-green': '#065f46',
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #065f46 0%, #10b981 50%, #3b82f6 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <i class="fas fa-leaf text-green-primary text-2xl mr-3"></i>
                    <span class="font-bold text-xl text-gray-800">Green Intelligence</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-primary transition {{ request()->routeIs('home') ? 'text-green-primary font-semibold' : '' }}">Home</a>
                    <a href="{{ route('agro-industry') }}" class="text-gray-700 hover:text-green-primary transition {{ request()->routeIs('agro-industry') ? 'text-green-primary font-semibold' : '' }}">Agro-Industry</a>
                    <a href="{{ route('eco-tourism') }}" class="text-gray-700 hover:text-green-primary transition {{ request()->routeIs('eco-tourism') ? 'text-green-primary font-semibold' : '' }}">Eco-Tourism</a>
                    <a href="{{ route('ai-insights') }}" class="text-gray-700 hover:text-green-primary transition {{ request()->routeIs('ai-insights') ? 'text-green-primary font-semibold' : '' }}">AI Insights</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button text-gray-700 hover:text-green-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-green-primary {{ request()->routeIs('home') ? 'text-green-primary font-semibold' : '' }}">Home</a>
                <a href="{{ route('agro-industry') }}" class="block px-3 py-2 text-gray-700 hover:text-green-primary {{ request()->routeIs('agro-industry') ? 'text-green-primary font-semibold' : '' }}">Agro-Industry</a>
                <a href="{{ route('eco-tourism') }}" class="block px-3 py-2 text-gray-700 hover:text-green-primary {{ request()->routeIs('eco-tourism') ? 'text-green-primary font-semibold' : '' }}">Eco-Tourism</a>
                <a href="{{ route('ai-insights') }}" class="block px-3 py-2 text-gray-700 hover:text-green-primary {{ request()->routeIs('ai-insights') ? 'text-green-primary font-semibold' : '' }}">AI Insights</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-leaf text-green-primary text-2xl mr-3"></i>
                    <span class="font-bold text-xl">ICT Roadshow 2024</span>
                </div>
                <p class="text-gray-300 mb-2">"Smart Technology for a Greener Future"</p>
                <p class="text-sm text-gray-400">© 2024 Green Intelligence. Transforming Agriculture & Tourism with AI</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function () {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
    
    @yield('scripts')
</body>
</html>
