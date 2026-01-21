<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="max-w-10xl mx-auto space-y-6 mt-8">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="group relative block bg-white p-8 rounded-3xl border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 overflow-hidden">
                <!-- Red Left Accent -->
                <div class="absolute inset-y-0 left-0 w-2 bg-red-500 group-hover:w-3 transition-all"></div>
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <span class="px-2.5 py-0.5 bg-red-100 text-red-700 text-xs font-bold rounded-full uppercase tracking-tighter">
                                Active 
                            </span>
                            <span class="text-gray-400 text-xs font-mono">#JOB-{{ 100 + $job['id'] }}</span>
                        </div>
                        <h2 class="text-3xl font-black text-gray-900 group-hover:text-red-600 transition-colors">
                            {{ $job['title'] }}
                        </h2>
                        <div class="flex items-center text-gray-400 text-sm font-medium">
                            <svg class="w-4 h-4 mr-1.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            Global / Remote
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="bg-yellow-400 px-6 py-4 rounded-2xl shadow-lg transform group-hover:rotate-3 transition-transform">
                            <div class="text-[10px] font-black text-black uppercase tracking-widest opacity-60">Base Salary</div>
                            <div class="text-2xl font-black text-black tabular-nums">
                                {{ $job['salary'] }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hover Overlay -->
                <div class="absolute bottom-0 right-0 p-4 opacity-0 transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all">
                    <span class="text-red-500 font-bold text-sm flex items-center">
                        View Details
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>