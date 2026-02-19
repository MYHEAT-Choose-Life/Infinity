<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <title>{{ $post->title }} - Infinity Strategic Business Solutions</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Custom Article CSS -->
    <link rel="stylesheet" href="{{ asset('css/article-redesign.css') }}">
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="{{ asset('aos/aos.css')}}">
    <style>
        /* Responsive Header Styles */
        @media (max-width: 768px) {
            .hamburger-article {
                display: flex !important;
                order: 1;
                margin-left: auto;
            }
            .header-container {
                position: relative;
            }
            .brand-logo {
                order: 0;
            }
            .nav-links {
                display: none !important;
            }
        }
        /* Hover effect for desktop */
        .nav-links li a:hover {
            color: #c92b87 !important;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <!-- Header (Consistent with Article Page) -->
    <header class="article-header" style="background-color: white; padding: 1.5rem 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 3rem;">
        <div class="header-container" style="width: 100%; max-width: 100%; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 2rem; box-sizing: border-box;">
            <!-- Hamburger Icon for Mobile (Left side) -->
            <button class="hamburger-article" id="hamburger" type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffcanvas" aria-controls="navOffcanvas" aria-label="Toggle navigation" style="display: none; border: none; background: transparent; flex-direction: column; cursor: pointer; width: 25px; height: 18px; justify-content: space-between; padding: 0;">
                <span style="display: block; height: 3px; background: #333; border-radius: 3px; width: 100%;"></span>
                <span style="display: block; height: 3px; background: #333; border-radius: 3px; width: 100%;"></span>
                <span style="display: block; height: 3px; background: #333; border-radius: 3px; width: 100%;"></span>
            </button>

            <a href="{{ url('/') }}" class="brand-logo" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
                <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo" style="height: 50px; width: auto; filter: invert(1) brightness(0);">
                <div class="brand-text" style="font-size: 0.9rem; font-weight: 700; color: #000; text-transform: uppercase; line-height: 1.2; max-width: 200px; font-family: 'Montserrat', sans-serif;">INFINITY STRATEGIC BUSINESS SOLUTIONS</div>
            </a>
            
            <ul class="nav-links" style="display: flex; gap: 2rem; list-style: none; margin: 0; padding: 0;">
                <li><a href="{{ url('/') }}" style="text-decoration: none; color: #1a1a1a; font-weight: 500; font-size: 0.95rem; font-family: 'Montserrat', sans-serif;">Home</a></li>
                <li><a href="{{  url('/#about') }}" style="text-decoration: none; color: #000; font-weight: 500; font-size: 0.95rem; font-family: 'Montserrat', sans-serif;">About</a></li>
                <li><a href="{{  url('/#services') }}" style="text-decoration: none; color: #1a1a1a; font-weight: 500; font-size: 0.95rem; font-family: 'Montserrat', sans-serif;">Services</a></li>
                <li><a href="{{ url('/#contact') }}" style="text-decoration: none; color: #1a1a1a; font-weight: 500; font-size: 0.95rem; font-family: 'Montserrat', sans-serif;">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="navOffcanvas" aria-labelledby="navOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="navOffcanvasLabel" style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #ffffff;">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 1rem;"><a href="{{ url('/') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.2);" data-bs-dismiss="offcanvas">Home</a></li>
                <li style="margin-bottom: 1rem;"><a href="{{ route('articlelist') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.2);" data-bs-dismiss="offcanvas">Articles</a></li>
                <li style="margin-bottom: 1rem;"><a href="{{ url('/#about') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.2);" data-bs-dismiss="offcanvas">About</a></li>
                <li style="margin-bottom: 1rem;"><a href="{{ url('/#contact') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0;" data-bs-dismiss="offcanvas">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="article-container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="{{ route('articlelist') }}">Articles</a> <span>/</span> {{ $post->title }}
        </div>

        <!-- Title -->
        <h1 class="article-title">{{ $post->title }}</h1>

        <!-- Meta -->
        <div class="article-meta">
            By <a href="#">{{ $post->author }}</a>
            <span>•</span>
            Published on {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}
            <span>•</span>
            8 min read
        </div>

        <!-- Featured Image -->
        @if($post->image)
        <div class="featured-image">
            <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->title }}" loading="lazy">
        </div>
        @endif

        <!-- Content -->
        <div class="article-body">
            @php
                echo $post->content;
            @endphp
        </div>

        <!-- Download Attachment -->
        @if($post->attachment)
            <div style="margin-top: 2rem;">
                <a href="{{ asset('storage/' . $post->attachment) }}" style="display: inline-flex; align-items: center; gap: 8px; background-color: #c92b87; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: 600;" download>
                    <i class="fas fa-download"></i> Download Article Document
                </a>
            </div>
        @endif

        <!-- Share Section -->
        <div class="share-section">
            <div class="share-label">Share this article</div>
            <div class="share-icons">
                <a href="https://www.linkedin.com/company/106268097/" target="_blank" class="share-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Author Bio -->
        <div class="author-bio">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($post->author) }}&background=random" alt="{{ $post->author }}" class="author-avatar" loading="lazy">
            <div class="author-info">
                <h4>Written By</h4>
                <h3>{{ $post->author }}</h3>
                @if (strtolower(trim($post->author)) === 'charissa petersen')
                <p>Charissa Petersen is a seasoned global executive with over two decades of leadership experience across people, culture, technology, governance, and sustainability. She is recognised for strengthening industrial stability, shaping ethical leadership, and driving data-driven social impact with a focus on empowering women and youth.</p>
                @else
                <p>{{ $post->author }} is a leading thinker in the field, exploring the intersection of creativity and innovation. Passionate about making complex topics accessible to a broader audience.</p>
                @endif
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-content">
            <div class="brand-logo-footer">
                <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo" style="height: 30px;">
                <div class="brand-text-footer">INFINITY STRATEGIC BUSINESS SOLUTIONS</div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="https://www.myheat.co.za/" target="_blank" rel="noopener" style="text-decoration: none; color: inherit;">MYHEAT</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('aos/aos.js')}}"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        // Copy share link to clipboard
        document.addEventListener('DOMContentLoaded', function() {
            const copyBtn = document.getElementById('copyLinkBtn');
            if (copyBtn) {
                copyBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const url = window.location.href;
                    navigator.clipboard.writeText(url).then(() => {
                        copyBtn.classList.add('copied');
                        alert('Link copied to clipboard.');
                    });
                });
            }
        });
    </script>
</body>
</html>