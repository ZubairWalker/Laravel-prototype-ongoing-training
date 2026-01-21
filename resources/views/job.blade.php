<x-layout>
    <x-slot:heading>
        Job Opportunity
    </x-slot:heading>

    <div class="max-w-10xl mx-auto mt-8">
        <!-- Back Link -->
        <a href="/jobs" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-indigo-600 transition-colors mb-6 group">
            <svg class="w-4 h-4 mr-1 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to All Listings
        </a>

        <!-- Job Detail Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all hover:shadow-2xl">
            <!-- Header Section with Gradient -->
            <div class="bg-gradient-to-r from-indigo-600 to-violet-700 px-8 py-10 text-white">
                <div class="flex items-center space-x-2 mb-4">
                    <span class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs font-bold uppercase tracking-wider">
                        Featured Position
                    </span>
                    
                </div>
                <h1 class="text-4xl font-extrabold tracking-tight">Job: {{ $job['title'] }}</h1>
            </div>

            <!-- Content Section -->
            <div class="px-8 py-8 space-y-8">
                <!-- Salary Highlight -->
                <div class="flex items-center justify-between p-6 bg-emerald-50 rounded-xl border border-emerald-100">
                    <div>
                        <p class="text-sm font-semibold text-emerald-800 uppercase tracking-widest">Offered Salary</p>
                        <p class="text-3xl font-black text-emerald-600 mt-1">{{ $job['salary'] }} <span class="text-sm font-normal text-emerald-500">Per Annually</span></p>
                    </div>
                    <div class="p-4 bg-emerald-100 rounded-full">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</x-layout>