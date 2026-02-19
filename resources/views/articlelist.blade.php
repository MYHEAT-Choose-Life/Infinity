<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <title>Articles | Infinity Strategic Business Solutions</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css')}}">
    <!-- Using the new CSS for typography consistency, but might need to be careful about conflicts with bootstrap/style.css if not scoped. 
         However, the user wants theme consistency. Let's import the fonts at least. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    
    <style>
        /* Overrides to match the requested design */
        body {
            font-family: 'Montserrat', 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }
        
        .article-header-title {
            font-family: 'Merriweather', serif; /* Requested Typography */
            font-size: 3.5rem; 
            font-weight: 900;
            color: #111;
        }

        .article-card {
            transition: transform 0.3s ease;
            border: none;
            background: transparent;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
        .article-card:hover .article-title {
            color: #c92b87; /* Pink hover for title */
            transition: color 0.3s ease;
        }
        .article-image-wrapper {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 15px;
            aspect-ratio: 16/9;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .article-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .article-card:hover .article-image-wrapper img {
            transform: scale(1.05);
        }
        .article-meta {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 8px;
            font-family: 'Montserrat', sans-serif;
        }
        .article-title {
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0;
            color: #000;
            font-family: 'Merriweather', serif; /* Consistent with article page */
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: #000;
            border-bottom: 2px solid #c92b87;
            padding-bottom: 10px;
            display: inline-block;
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Footer Styles moved to style.css */

        /* Hover effects */
        .nav-links li a:hover {
            color: #c92b87 !important;
        }
    </style>
</head>
<body>

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
                <li style="margin-bottom: 1rem;"><a href="{{  url('/#about') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.2);" data-bs-dismiss="offcanvas">About</a></li>
                <li style="margin-bottom: 1rem;"><a href="{{ url('/#services') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.2);" data-bs-dismiss="offcanvas">Services</a></li>
                <li style="margin-bottom: 1rem;"><a href="{{ url('/#contact') }}" style="text-decoration: none; color: #ffffff; font-weight: 500; font-size: 1.1rem; font-family: 'Montserrat', sans-serif; display: block; padding: 0.5rem 0;" data-bs-dismiss="offcanvas">Contact</a></li>
            </ul>
        </div>
    </div>
      
    <div class="container py-5">
        
        <!-- Header & Search -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5">
            <h1 class="article-header-title">Articles</h1>
            
            <form action="{{ route('articlelist') }}" method="GET" class="d-flex align-items-center mt-3 mt-md-0 search-form-wrapper" id="searchForm">
                <div class="input-group search-wrapper" style="border: 1px solid #000; border-radius: 20px; overflow: hidden; transition: border-color 0.3s;">
                    <span class="input-group-text bg-light border-0 search-icon-btn" style="padding-left: 15px; padding-right: 10px; cursor: pointer;" role="button" tabindex="0" aria-label="Submit search" onclick="document.getElementById('searchForm').submit();" onkeydown="if(event.key==='Enter'||event.key===' '){document.getElementById('searchForm').submit();}">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="search" name="search" class="form-control bg-light border-0 shadow-none" placeholder="Search" value="{{ request('search') }}" style="padding: 12px;" id="searchInput" aria-label="Search articles">
                </div>
            </form>
        </div>

        <style>
            .search-wrapper:focus-within {
                border-color: #c92b87 !important;
                box-shadow: 0 0 0 0.2rem rgba(201, 43, 135, 0.25);
            }
            .search-wrapper:focus-within i {
                color: #c92b87 !important;
            }
            
            /* Ensure input-group-text aligns properly */
            .search-wrapper .input-group-text {
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 0;
            }
            
            /* Search icon clickable styling */
            .search-icon-btn {
                cursor: pointer;
                transition: all 0.2s ease;
            }
            
            .search-icon-btn:hover {
                background-color: #f8f9fa !important;
            }
            
            .search-icon-btn:hover i {
                color: #c92b87 !important;
                transform: scale(1.1);
            }
            
            .search-icon-btn:active {
                background-color: #e9ecef !important;
            }
            
            .search-icon-btn i {
                transition: all 0.2s ease;
            }
            /* Focus-visible for search icon button */
            .search-icon-btn:focus-visible {
                outline: 2px solid #c92b87;
                outline-offset: 2px;
            }
            
            /* Style the clear button (cross) */
            input[type="search"]::-webkit-search-cancel-button {
                -webkit-appearance: none;
                height: 16px;
                width: 16px;
                background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23c92b87'><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/></svg>");
                cursor: pointer;
            }
            
            /* Mobile responsive styles for search bar */
            @media (max-width: 768px) {
                .search-form-wrapper {
                    width: 100% !important;
                }
                
                .search-wrapper {
                    max-width: 100% !important;
                    width: 100% !important;
                    display: flex !important;
                    flex-direction: row !important;
                    align-items: center !important;
                }
                
                .search-wrapper .input-group-text {
                    padding: 10px 8px 10px 12px !important;
                    flex-shrink: 0;
                }
                
                .search-wrapper .input-group-text i {
                    font-size: 1rem;
                }
                
                .search-wrapper input {
                    padding: 10px 12px !important;
                    font-size: 1rem !important;
                    height: auto !important;
                    flex: 1;
                }
                
                .article-header-title {
                    font-size: 2.5rem !important;
                    margin-bottom: 1rem;
                }
                
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
            
            @media (max-width: 576px) {
                .article-header-title {
                    font-size: 2rem !important;
                }
                
                .search-wrapper .input-group-text {
                    padding: 8px 6px 8px 10px !important;
                }
                
                .search-wrapper input {
                    padding: 8px 10px !important;
                    font-size: 0.95rem !important;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                const searchForm = document.getElementById('searchForm');

                searchInput.addEventListener('input', function() {
                    if (this.value === '') {
                        searchForm.submit();
                    }
                });
                
                // Submit form on Enter key
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        searchForm.submit();
                    }
                });
            });
        </script>

        <p class="text-muted mb-5" style="font-family: 'Montserrat', sans-serif;">Discover trending topics, insightful opinions, and engaging videos from our team of experts.</p>

        <!-- Trending Section -->
        <div class="mb-5">
            <h2 class="section-title" style="border-bottom: 2px solid #000;">Trending</h2>
            
            @if($trending->count() > 0)
                <div class="row g-4">
                    @foreach($trending as $post)
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('article', $post->slug) }}" class="text-decoration-none">
                                <div class="article-card">
                                    <div class="article-image-wrapper">
                                        @if($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" loading="lazy">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                                                <i class="fas fa-image fa-2x"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="article-meta">
                                        <span style="color: #000; font-weight: 600;">{{ $post->author }}</span> • {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                    </div>
                                    <h3 class="article-title">{{ $post->title }}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-muted">No trending articles found.</p>
            @endif
        </div>

        <!-- Opinion Section -->
        <div class="mb-5">
            <h2 class="section-title" style="border-bottom: 2px solid #000;">Opinion</h2>
            
            @if($opinion->count() > 0)
                <div class="row g-4">
                    @foreach($opinion as $post)
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('article', $post->slug) }}" class="text-decoration-none">
                                <div class="article-card">
                                    <div class="article-image-wrapper">
                                        @if($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" loading="lazy">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                                                <i class="fas fa-pen-nib fa-2x"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="article-meta">
                                        <span class="text-uppercase" style="color: #000; font-size: 0.7rem; letter-spacing: 1px;">Opinion</span>
                                    </div>
                                    <h3 class="article-title mb-2">{{ $post->title }}</h3>
                                    <p class="text-muted small mb-0">
                                        By {{ $post->author }} • {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-muted">No opinion pieces found.</p>
            @endif
        </div>

        <!-- Video Section -->
        <div class="mb-5">
            <h2 class="section-title">Video</h2>
            
            @if($videos->count() > 0)
                <div class="row g-4">
                    @foreach($videos as $post)
                        <div class="col-md-4 col-lg-3">
                            <a href="{{ route('article', $post->slug) }}" class="text-decoration-none">
                                <div class="article-card">
                                    <div class="article-image-wrapper position-relative">
                                        @if($post->thumbnail)
                                            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" loading="lazy">
                                        @elseif($post->youtube_embed_url)
                                            <iframe width="100%" height="100%" src="{{ $post->youtube_embed_url }}" frameborder="0" allowfullscreen title="{{ $post->title }} video preview" style="pointer-events: none;"></iframe>
                                        @else
                                            <div class="d-flex align-items-center justify-content-center h-100 bg-dark text-white">
                                                <i class="fas fa-play fa-2x"></i>
                                            </div>
                                        @endif
                                        
                                        <!-- Play Icon Overlay -->
                                        <div class="position-absolute top-50 start-50 translate-middle">
                                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; opacity: 0.8;">
                                                <i class="fas fa-play text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="article-title">{{ $post->title }}</h3>
                                    <div class="article-meta mt-2">
                                        By {{ $post->author }} • {{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-muted">No videos found.</p>
            @endif
        </div>

    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-content">
            <div class="brand-logo-footer">
                <img src="{{ asset('icons/logo.png') }}" alt="Infinity Logo" loading="lazy" style="height: 30px;">
                <div class="brand-text-footer">INFINITY STRATEGIC BUSINESS SOLUTIONS</div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="https://www.myheat.co.za/" target="_blank" rel="noopener" style="text-decoration: none; color: inherit;">MYHEAT</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('aos/aos.js')}}"></script>
    <script src="{{ asset('js/main.js')}}" defer></script>
    <script>
        AOS.init({ duration: 1000, once: false });
    </script>
</body>
</html>