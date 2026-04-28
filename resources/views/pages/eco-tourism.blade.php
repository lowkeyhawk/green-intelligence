@extends('layouts.app')

@section('title', 'Sustainable Eco-Tourism - Green Intelligence')

@section('content')
<!-- Eco-Tourism Module -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Sustainable Eco-Tourism</h2>
            <p class="text-xl text-gray-600">AI-curated destinations for responsible travel</p>
        </div>
        
        <!-- Destination Cards -->
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden card-hover">
                <div class="relative h-48 bg-gradient-to-br from-green-400 to-green-600">
                    <img src="https://picsum.photos/seed/nature-park/400/300" alt="Nature Park" class="w-full h-full object-cover opacity-80">
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <i class="fas fa-leaf mr-1"></i> 9.5/10
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Emerald Valley Nature Park</h3>
                    <p class="text-gray-600 mb-4">Pristine wilderness with guided eco-tours and wildlife conservation programs.</p>
                    <a href="{{ route('destination', 'emerald-valley') }}" class="w-full bg-green-primary text-white py-2 px-4 rounded-lg hover:bg-green-dark transition transform hover:scale-105 text-center block">
                        <i class="fas fa-search mr-2"></i>
                        Explore Destination
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-xl overflow-hidden card-hover">
                <div class="relative h-48 bg-gradient-to-br from-blue-400 to-blue-600">
                    <img src="https://picsum.photos/seed/eco-resort/400/300" alt="Eco Resort" class="w-full h-full object-cover opacity-80">
                    <div class="absolute top-4 right-4">
                        <span class="bg-tech-blue text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <i class="fas fa-star mr-1"></i> 9.2/10
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Azure Shores Eco Resort</h3>
                    <p class="text-gray-600 mb-4">Luxury sustainable beachfront resort with marine conservation initiatives.</p>
                    <a href="{{ route('destination', 'azure-shores') }}" class="w-full bg-tech-blue text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition transform hover:scale-105 text-center block">
                        <i class="fas fa-search mr-2"></i>
                        Explore Destination
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-xl overflow-hidden card-hover">
                <div class="relative h-48 bg-gradient-to-br from-yellow-500 to-orange-600">
                    <img src="https://picsum.photos/seed/protected-area/400/300" alt="Protected Area" class="w-full h-full object-cover opacity-80">
                    <div class="absolute top-4 right-4">
                        <span class="bg-earth-brown text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <i class="fas fa-shield-alt mr-1"></i> 9.8/10
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Golden Highlands Reserve</h3>
                    <p class="text-gray-600 mb-4">UNESCO-protected biodiversity hotspot with indigenous cultural experiences.</p>
                    <a href="{{ route('destination', 'golden-highlands') }}" class="w-full bg-earth-brown text-white py-2 px-4 rounded-lg hover:bg-amber-700 transition transform hover:scale-105 text-center block">
                        <i class="fas fa-search mr-2"></i>
                        Explore Destination
                    </a>
                </div>
            </div>
        </div>
        
        <!-- AI Travel Planner -->
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">AI Travel Planner</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Travel Duration</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-primary">
                            <option>Weekend (2-3 days)</option>
                            <option>Week (5-7 days)</option>
                            <option>Extended (10-14 days)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Interest Level</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-green-primary" checked>
                                <span class="text-sm">Wildlife & Nature</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-green-primary" checked>
                                <span class="text-sm">Cultural Experiences</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-green-primary">
                                <span class="text-sm">Adventure Activities</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2 text-green-primary">
                                <span class="text-sm">Relaxation & Wellness</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Budget Range</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-primary">
                            <option>Budget (Under $500)</option>
                            <option>Moderate ($500-1500)</option>
                            <option>Premium ($1500-3000)</option>
                            <option>Luxury ($3000+)</option>
                        </select>
                    </div>
                    
                    <button class="w-full bg-green-primary text-white py-3 px-4 rounded-lg hover:bg-green-dark transition font-semibold">
                        <i class="fas fa-magic mr-2"></i>
                        Generate AI Recommendations
                    </button>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">AI Recommendations</h3>
                <div class="space-y-4">
                    <div class="border-l-4 border-green-primary pl-4">
                        <h5 class="font-semibold text-gray-800">Optimal Travel Season</h5>
                        <p class="text-sm text-gray-600 mt-1">Based on weather patterns and tourist data, visit during March-May for best experience.</p>
                    </div>
                    
                    <div class="border-l-4 border-tech-blue pl-4">
                        <h5 class="font-semibold text-gray-800">Suggested Itinerary</h5>
                        <p class="text-sm text-gray-600 mt-1">Day 1-2: Emerald Valley Nature Park → Day 3-4: Azure Shores Eco Resort → Day 5: Golden Highlands Reserve</p>
                    </div>
                    
                    <div class="border-l-4 border-earth-brown pl-4">
                        <h5 class="font-semibold text-gray-800">Carbon Offset Options</h5>
                        <p class="text-sm text-gray-600 mt-1">Your trip generates 120kg CO₂. We recommend planting 3 trees to offset your carbon footprint.</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-500 pl-4">
                        <h5 class="font-semibold text-gray-800">Local Community Impact</h5>
                        <p class="text-sm text-gray-600 mt-1">Your visit supports 47 local families and contributes to conservation efforts.</p>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-green-50 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-award text-green-primary text-2xl mr-3"></i>
                        <div>
                            <div class="font-semibold text-gray-800">Eco-Traveler Score</div>
                            <div class="text-sm text-gray-600">Your planned trip scores 8.7/10 for sustainability</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sustainability Rating System -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Destination Sustainability Rating System</h3>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="bg-green-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Waste Management</h4>
                    <p class="text-sm text-gray-600">Recycling programs and waste reduction initiatives</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-tech-blue text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Energy Efficiency</h4>
                    <p class="text-sm text-gray-600">Renewable energy and carbon footprint reduction</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-earth-brown text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Community Support</h4>
                    <p class="text-sm text-gray-600">Local employment and community development</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-dark text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Conservation</h4>
                    <p class="text-sm text-gray-600">Biodiversity protection and habitat preservation</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
