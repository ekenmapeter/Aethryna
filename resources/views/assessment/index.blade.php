@extends('layouts.aethryna')

@section('title', 'Find Your Pathway - Aethryna Foundation')

@section('content')
<section class="bg-gradient-to-r from-teal-700 to-teal-900 text-white py-32 px-8 relative overflow-hidden">
   <br/>
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400 opacity-10 rounded-full -mr-48 -mt-48"></div>
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <h1 class="text-5xl font-bold mb-6">Find Your Pathway</h1>
        <p class="text-xl mb-8 opacity-90">Discover the Aethryna learning track that aligns with your strengths, interests, and future goals.</p>

        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-semibold mb-4">This is not a school-style test.</h2>
            <p class="text-lg opacity-90 mb-6">It's a quick personality and strengths assessment that helps you identify the digital pathway most suitable for your learning style.</p>

            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="bg-white/20 rounded-lg p-4">
                    <div class="text-3xl mb-2">📊</div>
                    <h3 class="font-semibold mb-2">15 Questions</h3>
                    <p class="text-sm opacity-80">Multiple choice questions about your preferences</p>
                </div>
                <div class="bg-white/20 rounded-lg p-4">
                    <div class="text-3xl mb-2">🎯</div>
                    <h3 class="font-semibold mb-2">Personalized Results</h3>
                    <p class="text-sm opacity-80">Get 1-2 pathway recommendations</p>
                </div>
                <div class="bg-white/20 rounded-lg p-4">
                    <div class="text-3xl mb-2">🚀</div>
                    <h3 class="font-semibold mb-2">Next Steps</h3>
                    <p class="text-sm opacity-80">Clear guidance on your learning journey</p>
                </div>
            </div>
        </div>

        <form action="{{ route('assessment.start') }}" method="POST" class="inline-block">
            @csrf
            <button type="submit" class="bg-yellow-400 text-black px-8 py-4 rounded-full text-xl font-bold hover:bg-yellow-300 transition-colors transform hover:scale-105 shadow-lg">
                Start Assessment
            </button>
        </form>

        <p class="text-sm opacity-70 mt-4">Takes about 5-7 minutes to complete</p>
    </div>
</section>

<section class="py-16 px-8 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-teal-700 mb-4">How it Works</h2>
            <p class="text-lg text-gray-600">Your journey to digital transformation starts with understanding yourself</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                <h3 class="text-xl font-semibold text-teal-700 mb-2">Instructions</h3>
                <p class="text-gray-600">Intro text + Start Assessment button. You'll answer 15 short questions based on your preferences.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                <h3 class="text-xl font-semibold text-teal-700 mb-2">Questions</h3>
                <p class="text-gray-600">8-10 multiple choice questions covering cognitive orientation, behavioral traits, motivation, and readiness.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                <h3 class="text-xl font-semibold text-teal-700 mb-2">Results</h3>
                <p class="text-gray-600">Primary pathway + secondary suggestion + personalized learning track recommendations.</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-8 shadow-md">
            <h3 class="text-2xl font-bold text-teal-700 mb-4">What You'll Get</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-lg font-semibold text-teal-600 mb-2">🎯 Primary Pathway</h4>
                    <p class="text-gray-600 mb-4">Your main recommended learning track based on your assessment results.</p>

                    <h4 class="text-lg font-semibold text-teal-600 mb-2">📈 Secondary Option</h4>
                    <p class="text-gray-600 mb-4">Alternative pathway if your interests evolve or you want to explore more.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-teal-600 mb-2">📚 Personalized Learning</h4>
                    <p class="text-gray-600 mb-4">Tailored recommendations based on your current skill level and goals.</p>

                    <h4 class="text-lg font-semibold text-teal-600 mb-2">🚀 Next Steps</h4>
                    <p class="text-gray-600">Clear action items to start your learning journey with Aethryna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 px-8 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-teal-700 mb-8">Ready to Discover Your Path?</h2>
        <p class="text-lg text-gray-600 mb-8">Join thousands of learners who have found their perfect digital pathway with Aethryna's assessment.</p>

        <form action="{{ route('assessment.start') }}" method="POST" class="inline-block">
            @csrf
            <button type="submit" class="bg-teal-500 text-white px-8 py-4 rounded-full text-xl font-bold hover:bg-teal-600 transition-colors transform hover:scale-105 shadow-lg">
                Begin Your Assessment
            </button>
        </form>

        <p class="text-sm text-gray-500 mt-4">No account required • Completely free • Takes 5-7 minutes</p>
    </div>
</section>

@push('styles')
<style>
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
    }
</style>
@endpush
@endsection
