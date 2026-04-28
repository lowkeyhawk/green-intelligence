@extends('layouts.app')

@section('title', 'AI Insights Dashboard - Green Intelligence')

@section('content')
<!-- AI Insights Dashboard -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">AI Insights Dashboard</h2>
            <p class="text-xl text-gray-600">Machine learning predictions and environmental impact analytics</p>
        </div>
        
        <!-- Key Metrics Overview -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Productivity Increase</p>
                        <p class="text-3xl font-bold text-green-primary">+34%</p>
                    </div>
                    <div class="bg-green-primary bg-opacity-10 p-3 rounded-lg">
                        <i class="fas fa-chart-line text-green-primary text-xl"></i>
                    </div>
                </div>
                <div class="text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i>
                    8% from last month
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Carbon Reduction</p>
                        <p class="text-3xl font-bold text-tech-blue">-28%</p>
                    </div>
                    <div class="bg-tech-blue bg-opacity-10 p-3 rounded-lg">
                        <i class="fas fa-leaf text-tech-blue text-xl"></i>
                    </div>
                </div>
                <div class="text-sm text-blue-600">
                    <i class="fas fa-arrow-down mr-1"></i>
                    5% improvement
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">AI Accuracy</p>
                        <p class="text-3xl font-bold text-earth-brown">96.2%</p>
                    </div>
                    <div class="bg-earth-brown bg-opacity-10 p-3 rounded-lg">
                        <i class="fas fa-brain text-earth-brown text-xl"></i>
                    </div>
                </div>
                <div class="text-sm text-orange-600">
                    <i class="fas fa-arrow-up mr-1"></i>
                    2.1% increase
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 card-hover">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Cost Savings</p>
                        <p class="text-3xl font-bold text-green-dark">$2.4M</p>
                    </div>
                    <div class="bg-green-dark bg-opacity-10 p-3 rounded-lg">
                        <i class="fas fa-piggy-bank text-green-dark text-xl"></i>
                    </div>
                </div>
                <div class="text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i>
                    18% YOY growth
                </div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <!-- Agricultural Productivity Trends -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Agricultural Productivity Trends</h3>
                <div class="h-64">
                    <canvas id="productivityChart"></canvas>
                </div>
                <div class="mt-4 grid grid-cols-3 gap-4 text-center">
                    <div>
                        <p class="text-sm text-gray-600">Traditional</p>
                        <p class="font-semibold">2.1 tons/ha</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">AI-Assisted</p>
                        <p class="font-semibold text-green-primary">3.4 tons/ha</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Improvement</p>
                        <p class="font-semibold text-green-600">+62%</p>
                    </div>
                </div>
            </div>
            
            <!-- Environmental Impact Reduction -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Environmental Impact Reduction</h3>
                <div class="h-64">
                    <canvas id="environmentChart"></canvas>
                </div>
                <div class="mt-4 grid grid-cols-3 gap-4 text-center">
                    <div>
                        <p class="text-sm text-gray-600">Water Usage</p>
                        <p class="font-semibold text-blue-600">-35%</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">CO₂ Emissions</p>
                        <p class="font-semibold text-green-600">-28%</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Waste</p>
                        <p class="font-semibold text-orange-600">-42%</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Machine Learning Prediction Panels -->
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <!-- Crop Yield Prediction -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Crop Yield Prediction</h3>
                    <span class="bg-green-100 text-green-primary px-2 py-1 rounded text-xs font-semibold">ML Model v3.2</span>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Next Season Forecast</span>
                            <span class="font-semibold">3,850 kg/ha</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-primary h-2 rounded-full" style="width: 77%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Confidence Level</span>
                            <span class="font-semibold">94.2%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-primary h-2 rounded-full" style="width: 94.2%"></div>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t">
                        <p class="text-sm text-gray-600 mb-2">Key Factors:</p>
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span>Soil Quality</span>
                                <span class="text-green-600">Optimal</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Weather Pattern</span>
                                <span class="text-blue-600">Favorable</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Historical Data</span>
                                <span class="text-orange-600">Positive</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tourism Demand Forecast -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Tourism Demand Forecast</h3>
                    <span class="bg-blue-100 text-tech-blue px-2 py-1 rounded text-xs font-semibold">ML Model v2.8</span>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Peak Season Visitors</span>
                            <span class="font-semibold">12,500</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-tech-blue h-2 rounded-full" style="width: 83%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Revenue Projection</span>
                            <span class="font-semibold">$890K</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-tech-blue h-2 rounded-full" style="width: 89%"></div>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t">
                        <p class="text-sm text-gray-600 mb-2">Trend Analysis:</p>
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span>Eco-Tourism Growth</span>
                                <span class="text-green-600">+24%</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Repeat Visitors</span>
                                <span class="text-blue-600">68%</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Satisfaction Score</span>
                                <span class="text-orange-600">9.2/10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Climate Impact Analysis -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Climate Impact Analysis</h3>
                    <span class="bg-orange-100 text-earth-brown px-2 py-1 rounded text-xs font-semibold">ML Model v4.1</span>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Carbon Offset Potential</span>
                            <span class="font-semibold">450 tons CO₂</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-earth-brown h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Climate Resilience</span>
                            <span class="font-semibold">87.3%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-earth-brown h-2 rounded-full" style="width: 87.3%"></div>
                        </div>
                    </div>
                    
                    <div class="pt-4 border-t">
                        <p class="text-sm text-gray-600 mb-2">Risk Assessment:</p>
                        <div class="space-y-1">
                            <div class="flex justify-between text-xs">
                                <span>Drought Risk</span>
                                <span class="text-yellow-600">Moderate</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Flood Risk</span>
                                <span class="text-green-600">Low</span>
                            </div>
                            <div class="flex justify-between text-xs">
                                <span>Temperature Impact</span>
                                <span class="text-blue-600">Minimal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Real-time Monitoring -->
        <div class="bg-gradient-to-r from-green-primary to-tech-blue rounded-lg p-8 text-white">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4">Real-Time AI Monitoring</h3>
                <p class="mb-6">Continuous analysis of agricultural and environmental data</p>
                
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">24/7</div>
                        <div class="text-sm opacity-90">Active Monitoring</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">1.2M</div>
                        <div class="text-sm opacity-90">Data Points Daily</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">< 1s</div>
                        <div class="text-sm opacity-90">Alert Response</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">99.9%</div>
                        <div class="text-sm opacity-90">Uptime</div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <button class="bg-white text-green-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-tachometer-alt mr-2"></i>
                        View Live Dashboard
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
// Productivity Chart
const productivityCtx = document.getElementById('productivityChart');
if (productivityCtx) {
    new Chart(productivityCtx, {
        type: 'line',
        data: {
            labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q1', 'Q2', 'Q3', 'Q4'],
            datasets: [{
                label: 'Traditional Farming',
                data: [2.1, 2.0, 2.2, 2.1, 2.0, 2.1, 2.2, 2.1],
                borderColor: 'rgb(156, 163, 175)',
                backgroundColor: 'rgba(156, 163, 175, 0.1)',
                tension: 0.4
            }, {
                label: 'AI-Assisted Farming',
                data: [2.8, 3.0, 3.2, 3.4, 3.3, 3.5, 3.6, 3.8],
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
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
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Yield (tons/hectare)'
                    }
                }
            }
        }
    });
}

// Environmental Impact Chart
const environmentCtx = document.getElementById('environmentChart');
if (environmentCtx) {
    new Chart(environmentCtx, {
        type: 'bar',
        data: {
            labels: ['Water Usage', 'CO₂ Emissions', 'Waste Reduction', 'Energy Efficiency', 'Soil Health'],
            datasets: [{
                label: 'Before AI',
                data: [100, 100, 100, 100, 100],
                backgroundColor: 'rgba(156, 163, 175, 0.8)',
            }, {
                label: 'After AI',
                data: [65, 72, 58, 85, 92],
                backgroundColor: 'rgba(16, 185, 129, 0.8)',
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
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Impact Index (Baseline = 100)'
                    }
                }
            }
        }
    });
}
</script>
@endsection
