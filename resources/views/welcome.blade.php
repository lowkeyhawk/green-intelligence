@extends('layouts.app')

@section('title', 'Green Intelligence - AI-powered Agro-Industry and Eco-Tourism Solutions')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 animate-float">
            <i class="fas fa-drone text-white text-6xl"></i>
        </div>
        <div class="absolute top-40 right-20 animate-pulse-slow">
            <i class="fas fa-seedling text-white text-5xl"></i>
        </div>
        <div class="absolute bottom-20 left-1/4 animate-float" style="animation-delay: 1s;">
            <i class="fas fa-microchip text-white text-4xl"></i>
        </div>
        <div class="absolute bottom-40 right-1/3 animate-pulse-slow" style="animation-delay: 2s;">
            <i class="fas fa-leaf text-white text-5xl"></i>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                Green Intelligence
            </h1>
            <p class="text-xl md:text-3xl text-green-100 mb-8">
                AI-powered Agro-Industry and Eco-Tourism Solutions
            </p>
            <p class="text-lg text-gray-200 mb-12 max-w-3xl mx-auto">
                Harnessing the power of Artificial Intelligence to create sustainable agriculture 
                and eco-friendly tourism solutions for a greener future.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button onclick="document.getElementById('agro-industry').scrollIntoView({behavior: 'smooth'})" 
                        class="bg-white text-green-primary px-8 py-4 rounded-lg font-semibold hover:bg-green-50 transition transform hover:scale-105 shadow-lg">
                    <i class="fas fa-tractor mr-2"></i>
                    Explore AI Solutions
                </button>
                <button onclick="document.getElementById('eco-tourism').scrollIntoView({behavior: 'smooth'})" 
                        class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-green-primary transition transform hover:scale-105">
                    <i class="fas fa-mountain mr-2"></i>
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Features Overview Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">How AI Transforms Industries</h2>
            <p class="text-xl text-gray-600">Intelligent solutions for sustainable development</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center card-hover p-6 rounded-lg">
                <div class="bg-green-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-brain text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Machine Learning</h3>
                <p class="text-gray-600">Predictive analytics for crop yields and tourism patterns</p>
            </div>
            
            <div class="text-center card-hover p-6 rounded-lg">
                <div class="bg-tech-blue text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-satellite text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Remote Sensing</h3>
                <p class="text-gray-600">Real-time monitoring of agricultural and environmental data</p>
            </div>
            
            <div class="text-center card-hover p-6 rounded-lg">
                <div class="bg-earth-brown text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Data Analytics</h3>
                <p class="text-gray-600">Insights for sustainable resource management</p>
            </div>
            
            <div class="text-center card-hover p-6 rounded-lg">
                <div class="bg-green-dark text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">IoT Integration</h3>
                <p class="text-gray-600">Smart sensors for precision agriculture and eco-monitoring</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-green-primary mb-2">87%</div>
                <div class="text-gray-600">Yield Increase</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-tech-blue mb-2">65%</div>
                <div class="text-gray-600">Water Reduction</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-earth-brown mb-2">92%</div>
                <div class="text-gray-600">Accuracy Rate</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-dark mb-2">150+</div>
                <div class="text-gray-600">Partner Farms</div>
            </div>
        </div>
    </div>
</section>

@include('partials.agro-industry')
@include('partials.eco-tourism')
@include('partials.ai-insights')
@endsection

@section('scripts')
<script>
    // Animate numbers on scroll
    function animateNumbers() {
        const numbers = document.querySelectorAll('.text-4xl');
        numbers.forEach(num => {
            const finalValue = parseInt(num.textContent);
            let currentValue = 0;
            const increment = finalValue / 50;
            const timer = setInterval(() => {
                currentValue += increment;
                if (currentValue >= finalValue) {
                    currentValue = finalValue;
                    clearInterval(timer);
                }
                num.textContent = Math.floor(currentValue) + (num.textContent.includes('%') ? '%' : (num.textContent.includes('+') ? '+' : ''));
            }, 30);
        });
    }

    // Trigger animation when stats section is visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateNumbers();
                observer.disconnect();
            }
        });
    });

    const statsSection = document.querySelector('.bg-gray-50 .grid');
    if (statsSection) {
        observer.observe(statsSection);
    }
</script>
@endsection
