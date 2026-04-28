@extends('layouts.app')

@section('title', $destination['title'] . ' - Green Intelligence')

@section('content')
<!-- Destination Details -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="mb-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700">Home</a>
                    </li>
                    <li>
                        <span class="text-gray-500">/</span>
                    </li>
                    <li>
                        <a href="{{ route('eco-tourism') }}" class="text-gray-500 hover:text-gray-700">Eco-Tourism</a>
                    </li>
                    <li>
                        <span class="text-gray-500">/</span>
                    </li>
                    <li>
                        <span class="text-gray-900 font-medium">{{ $destination['title'] }}</span>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Destination Header -->
        <div class="mb-12">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="relative h-64 md:h-96">
                    <img src="{{ $destination['image'] }}" alt="{{ $destination['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ $destination['title'] }}</h1>
                        <p class="text-lg text-white/90">{{ $destination['description'] }}</p>
                        <div class="mt-4">
                            <span class="bg-green-primary text-white px-4 py-2 rounded-full text-sm font-semibold">
                                <i class="fas fa-star mr-2"></i>{{ $destination['rating'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destination Content -->
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <div>
                <img src="{{ $destination['image'] }}" alt="{{ $destination['title'] }}" class="w-full rounded-lg mb-4">
                <div class="grid grid-cols-3 gap-4 text-center">
                    @foreach($destination['features'] as $feature)
                    <div class="bg-gray-50 p-3 rounded">
                        <div class="font-semibold text-sm">{{ $feature }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h4 class="text-2xl font-semibold mb-4">Discover Sustainable Excellence</h4>
                <p class="text-gray-600 mb-6">{{ $destination['description'] }}</p>
                
                <h5 class="font-semibold mb-3">AI-Powered Features:</h5>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>Real-time environmental monitoring through smart sensors</li>
                    <li>Predictive analytics for optimal visitor experiences</li>
                    <li>Automated sustainability tracking and reporting</li>
                    <li>AI-driven resource optimization for minimal environmental impact</li>
                </ul>
                
                <h5 class="font-semibold mb-3">Sustainability Initiatives:</h5>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>Carbon-neutral operations powered by renewable energy</li>
                    <li>Zero-waste policies with comprehensive recycling programs</li>
                    <li>Local community partnership and employment programs</li>
                    <li>Biodiversity conservation and habitat restoration</li>
                </ul>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-semibold">AI Sustainability Score:</span>
                        <span class="text-green-primary font-bold">95/100</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-primary h-2 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Section -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Plan Your Visit</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Select Date</label>
                        <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-primary">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Number of Visitors</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-primary">
                            <option>1-2 Visitors</option>
                            <option>3-5 Visitors</option>
                            <option>6-10 Visitors</option>
                            <option>10+ Visitors</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tour Type</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-primary">
                            <option>Self-Guided Tour</option>
                            <option>Guided Eco-Tour</option>
                            <option>Photography Tour</option>
                            <option>Educational Tour</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">AI Recommendations</h4>
                    <div class="space-y-3">
                        <div class="border-l-4 border-green-primary pl-4">
                            <p class="text-sm text-gray-600">Best visiting time: Early morning for wildlife spotting</p>
                        </div>
                        <div class="border-l-4 border-blue-500 pl-4">
                            <p class="text-sm text-gray-600">Recommended duration: 4-6 hours for complete experience</p>
                        </div>
                        <div class="border-l-4 border-yellow-500 pl-4">
                            <p class="text-sm text-gray-600">Weather forecast: Optimal conditions for next 3 days</p>
                        </div>
                    </div>
                    <button class="w-full bg-green-primary text-white py-3 px-4 rounded-lg hover:bg-green-dark transition font-semibold mt-6">
                        <i class="fas fa-calendar-check mr-2"></i>
                        Book Your Visit
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Destinations -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Explore More Destinations</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="{{ route('destination', 'emerald-valley') }}" class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                    <div class="h-32 bg-gradient-to-br from-green-400 to-green-600">
                        <img src="https://picsum.photos/seed/emerald-valley-thumb/300/200" alt="Emerald Valley" class="w-full h-full object-cover opacity-80">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold">Emerald Valley Nature Park</h4>
                        <p class="text-sm text-gray-600">Pristine wilderness sanctuary</p>
                    </div>
                </a>
                
                <a href="{{ route('destination', 'azure-shores') }}" class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                    <div class="h-32 bg-gradient-to-br from-blue-400 to-blue-600">
                        <img src="https://picsum.photos/seed/azure-shores-thumb/300/200" alt="Azure Shores" class="w-full h-full object-cover opacity-80">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold">Azure Shores Eco Resort</h4>
                        <p class="text-sm text-gray-600">Luxury marine conservation</p>
                    </div>
                </a>
                
                <a href="{{ route('destination', 'golden-highlands') }}" class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                    <div class="h-32 bg-gradient-to-br from-yellow-500 to-orange-600">
                        <img src="https://picsum.photos/seed/golden-highlands-thumb/300/200" alt="Golden Highlands" class="w-full h-full object-cover opacity-80">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold">Golden Highlands Reserve</h4>
                        <p class="text-sm text-gray-600">UNESCO biodiversity hotspot</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
