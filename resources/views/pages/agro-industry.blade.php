@extends('layouts.app')

@section('title', 'Smart Farming Analytics - Green Intelligence')

@section('content')
<!-- Agro-Industry Module -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Smart Farming Analytics</h2>
            <p class="text-xl text-gray-600">AI-driven insights for precision agriculture</p>
        </div>
        
        <!-- Analytics Dashboard -->
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <!-- Crop Monitoring Cards -->
            <div class="lg:col-span-2">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Crop Monitoring Dashboard</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Yield Prediction Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">Yield Prediction</h4>
                            <i class="fas fa-chart-line text-green-primary text-2xl"></i>
                        </div>
                        <div class="mb-4">
                            <div class="text-3xl font-bold text-green-primary">2,450 kg</div>
                            <div class="text-sm text-gray-600">Expected per hectare</div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Confidence Level</span>
                                <span class="font-semibold">94%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-primary h-2 rounded-full" style="width: 94%"></div>
                            </div>
                        </div>
                        <div class="mt-4 text-sm text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            12% increase from last season
                        </div>
                    </div>
                    
                    <!-- Soil Health Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">Soil Health</h4>
                            <i class="fas fa-seedling text-earth-brown text-2xl"></i>
                        </div>
                        <div class="mb-4">
                            <div class="text-3xl font-bold text-earth-brown">8.7/10</div>
                            <div class="text-sm text-gray-600">Overall health score</div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">pH Level</span>
                                <span class="font-semibold">6.8</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Nitrogen</span>
                                <span class="font-semibold">Optimal</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Moisture</span>
                                <span class="font-semibold">68%</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Weather Insights Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">Weather Insights</h4>
                            <i class="fas fa-cloud-sun text-tech-blue text-2xl"></i>
                        </div>
                        <div class="mb-4">
                            <div class="text-3xl font-bold text-tech-blue">24°C</div>
                            <div class="text-sm text-gray-600">Current temperature</div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Rainfall (7 days)</span>
                                <span class="font-semibold">45mm</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Humidity</span>
                                <span class="font-semibold">72%</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">UV Index</span>
                                <span class="font-semibold">Moderate</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Growth Stage Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">Growth Stage</h4>
                            <i class="fas fa-leaf text-green-dark text-2xl"></i>
                        </div>
                        <div class="mb-4">
                            <div class="text-3xl font-bold text-green-dark">Flowering</div>
                            <div class="text-sm text-gray-600">Day 45 of 120</div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-green-dark h-3 rounded-full" style="width: 37.5%"></div>
                        </div>
                        <div class="text-sm text-gray-600">
                            <i class="fas fa-info-circle mr-1"></i>
                            Optimal for nutrient application
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- AI Recommendations Panel -->
            <div class="lg:col-span-1">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">AI Recommendations</h3>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="space-y-4">
                        <!-- Recommendation 1 -->
                        <div class="border-l-4 border-green-primary pl-4">
                            <div class="flex items-start">
                                <i class="fas fa-lightbulb text-green-primary mt-1 mr-3"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Irrigation Optimization</h5>
                                    <p class="text-sm text-gray-600 mt-1">Reduce irrigation by 15% based on soil moisture analysis and weather forecast.</p>
                                    <div class="mt-2">
                                        <span class="text-xs bg-green-100 text-green-primary px-2 py-1 rounded">High Priority</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation 2 -->
                        <div class="border-l-4 border-tech-blue pl-4">
                            <div class="flex items-start">
                                <i class="fas fa-pills text-tech-blue mt-1 mr-3"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Nutrient Application</h5>
                                    <p class="text-sm text-gray-600 mt-1">Apply potassium-rich fertilizer in 3 days for optimal flowering support.</p>
                                    <div class="mt-2">
                                        <span class="text-xs bg-blue-100 text-tech-blue px-2 py-1 rounded">Medium Priority</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation 3 -->
                        <div class="border-l-4 border-yellow-500 pl-4">
                            <div class="flex items-start">
                                <i class="fas fa-bug text-yellow-500 mt-1 mr-3"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Pest Monitoring</h5>
                                    <p class="text-sm text-gray-600 mt-1">Increased risk of aphids detected. Schedule monitoring in northeast quadrant.</p>
                                    <div class="mt-2">
                                        <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded">Low Priority</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation 4 -->
                        <div class="border-l-4 border-earth-brown pl-4">
                            <div class="flex items-start">
                                <i class="fas fa-calendar text-earth-brown mt-1 mr-3"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Harvest Planning</h5>
                                    <p class="text-sm text-gray-600 mt-1">Optimal harvest window predicted: Days 110-115. Yield peak expected on day 112.</p>
                                    <div class="mt-2">
                                        <span class="text-xs bg-orange-100 text-earth-brown px-2 py-1 rounded">Planning</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t">
                        <button class="w-full bg-green-primary text-white py-2 px-4 rounded-lg hover:bg-green-dark transition">
                            <i class="fas fa-download mr-2"></i>
                            Download Full Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Performance Chart -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Seasonal Performance Trends</h3>
            <div class="h-64">
                <canvas id="agroChart"></canvas>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Agro-Industry Chart
const agroCtx = document.getElementById('agroChart');
if (agroCtx) {
    new Chart(agroCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Yield (tons/hectare)',
                data: [2.1, 2.3, 2.8, 3.2, 3.8, 4.2, 4.5, 4.3, 3.9, 3.4, 2.9, 2.4],
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                tension: 0.4
            }, {
                label: 'Water Usage (m³/hectare)',
                data: [450, 420, 380, 350, 320, 300, 280, 290, 310, 340, 380, 420],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
</script>
@endsection
