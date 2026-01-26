@extends('layouts.aethryna')

@section('title', 'Stories - Aethryna Foundation')

@section('description', 'Hear transformation stories from our community members who have transformed their lives through digital skills training and mentorship at Aethryna Foundation.')

@section('content')
<!-- Stories Section -->
<section class="stories py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Transformation Stories</h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">From potential to professional - hear directly from our community</p>
        </div>

        <!-- Testimonial Container -->
        <div class="testimonial-container max-w-4xl mx-auto">
            <!-- Testimonial 1 -->
            <div class="testimonial active bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 md:p-12 text-center shadow-2xl">
                <div class="testimonial-text text-lg md:text-xl text-white/90 italic mb-8 leading-relaxed">
                    "I went from being excluded from school to earning £25k as a junior web developer in 18 months. Aethryna didn't just teach me code - they taught me how to believe in myself."
                </div>
                <div class="testimonial-author flex items-center justify-center gap-6">
                    <div class="author-avatar w-20 h-20 rounded-full overflow-hidden border-4 border-yellow-400 transition-transform duration-300 hover:scale-110">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Jamie Wilson" class="w-full h-full object-cover">
                    </div>
                    <div class="author-info text-left">
                        <h4 class="text-xl font-bold text-white mb-1">Jamie Wilson</h4>
                        <p class="text-white/80">Junior Developer, TechStart</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 md:p-12 text-center shadow-2xl opacity-0 transform translate-x-full">
                <div class="testimonial-text text-lg md:text-xl text-white/90 italic mb-8 leading-relaxed">
                    "The mentorship I received at Aethryna completely changed my career trajectory. My mentor helped me navigate college applications and secure an internship that launched my professional journey."
                </div>
                <div class="testimonial-author flex items-center justify-center gap-6">
                    <div class="author-avatar w-20 h-20 rounded-full overflow-hidden border-4 border-yellow-400 transition-transform duration-300 hover:scale-110">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Maria Rodriguez" class="w-full h-full object-cover">
                    </div>
                    <div class="author-info text-left">
                        <h4 class="text-xl font-bold text-white mb-1">Maria Rodriguez</h4>
                        <p class="text-white/80">Software Engineer, TechCorp</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 md:p-12 text-center shadow-2xl opacity-0 transform translate-x-full">
                <div class="testimonial-text text-lg md:text-xl text-white/90 italic mb-8 leading-relaxed">
                    "Starting with zero technical knowledge, I now design websites for local businesses. Aethryna's hands-on approach and supportive community made all the difference in my transformation."
                </div>
                <div class="testimonial-author flex items-center justify-center gap-6">
                    <div class="author-avatar w-20 h-20 rounded-full overflow-hidden border-4 border-yellow-400 transition-transform duration-300 hover:scale-110">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Alex Thompson" class="w-full h-full object-cover">
                    </div>
                    <div class="author-info text-left">
                        <h4 class="text-xl font-bold text-white mb-1">Alex Thompson</h4>
                        <p class="text-white/80">Freelance Web Designer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Navigation -->
            <div class="testimonial-nav flex justify-center gap-4 mt-12">
                <div class="testimonial-dot w-4 h-4 rounded-full bg-white/30 cursor-pointer transition-all duration-300 hover:scale-125 active"></div>
                <div class="testimonial-dot w-4 h-4 rounded-full bg-white/30 cursor-pointer transition-all duration-300 hover:scale-125"></div>
                <div class="testimonial-dot w-4 h-4 rounded-full bg-white/30 cursor-pointer transition-all duration-300 hover:scale-125"></div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 md:p-12 max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Transform Lives Through Tech?</h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Join our network of dedicated mentors and help shape the next generation of leaders.</p>
                <a href="{{ route('register') }}" class="inline-flex items-center px-8 py-4 bg-yellow-400 text-gray-900 font-bold rounded-full hover:bg-yellow-300 transition-all duration-300 hover:shadow-lg hover:scale-105">
                    <i class="fas fa-handshake mr-3"></i>
                    Become a Tech Mentor
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Additional Stories Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">More Success Stories</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real stories of transformation from our community members</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Story Card 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-700 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-code text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">From Dropout to Developer</h3>
                <p class="text-gray-600 mb-6">"After dropping out of school, I found purpose through Aethryna's coding program. Now I'm building apps and mentoring others."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Success Story" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">David Chen</p>
                        <p class="text-gray-600 text-sm">Mobile App Developer</p>
                    </div>
                </div>
            </div>

            <!-- Story Card 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-700 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-palette text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Creative Career Launch</h3>
                <p class="text-gray-600 mb-6">"Aethryna's design program gave me the skills and confidence to pursue my passion. I'm now a freelance designer with my own studio."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Success Story" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Sarah Johnson</p>
                        <p class="text-gray-600 text-sm">UI/UX Designer</p>
                    </div>
                </div>
            </div>

            <!-- Story Card 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-700 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-server text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Tech Support to IT Leadership</h3>
                <p class="text-gray-600 mb-6">"Starting as help desk support, Aethryna's IT program opened doors to senior positions. Now I lead a team of 15 technicians."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Success Story" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Marcus Williams</p>
                        <p class="text-gray-600 text-sm">IT Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.testimonial');
    const dots = document.querySelectorAll('.testimonial-dot');
    let currentIndex = 0;
    let autoPlayInterval;

    function showTestimonial(index) {
        // Hide all testimonials
        testimonials.forEach(testimonial => {
            testimonial.classList.remove('active');
            testimonial.classList.add('opacity-0', 'transform', 'translate-x-full');
        });

        // Remove active class from all dots
        dots.forEach(dot => dot.classList.remove('active'));

        // Show current testimonial
        testimonials[index].classList.add('active');
        testimonials[index].classList.remove('opacity-0', 'transform', 'translate-x-full');
        dots[index].classList.add('active');

        currentIndex = index;
    }

    function nextTestimonial() {
        const nextIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(nextIndex);
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(nextTestimonial, 5000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }

    // Add click event listeners to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoPlay();
            showTestimonial(index);
            startAutoPlay();
        });
    });

    // Pause autoplay on hover
    testimonials.forEach(testimonial => {
        testimonial.addEventListener('mouseenter', stopAutoPlay);
        testimonial.addEventListener('mouseleave', startAutoPlay);
    });

    // Start autoplay
    startAutoPlay();
});
</script>

<style>
.stories {
    background: linear-gradient(135deg, #055860, #038b89);
    position: relative;
    overflow: hidden;
}

.testimonial {
    transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
}

.testimonial.active {
    opacity: 1 !important;
    transform: translateX(0) !important;
}

.testimonial-dot.active {
    background: white !important;
    transform: scale(1.3);
}
</style>
@endsection
