<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ifinity Strategic Business Solutions</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aos/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>


</head>
<body>

     
             <nav class="navbar mx-auto d-flex justify-content-center mb-5">
                <ul class="navlist article_nav" id="navlist">
                    <li><a href="{{ url('/') }}" class="nav_link active">Home</a></li>
                    <li><a href="/#about" class="nav_link">About us</a></li>
                    <li><a href="/#services" class="nav_link">Services</a></li>
                    <li><a href="/#contact" class="nav_link">Contact</a></li>
                </ul>

                <!-- Hamburger Icon -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
      
        <div class="container">
            <div class="row">
                
               

                <div class="top_compartment mb-2">
                    

                    <h1 class="big_article_text">Articles</h1>

                    <form class="search_compartment d-flex align-items-center justify-between gap-1" id="search-form">
                        <input class="search" id="search-input" type="search" placeholder="Search">
                        <button type="submit"  id="search-button" class="btn border-0 bg-transparent p-0">
                        <i class="search_icon fas fa-search fa-2x"></i>
                        </button>
                    </form>


                </div>
                       
                <div class="horizontal_line"></div>

                {{-- Trending Posts --}}
                <div class="trending_collection">
                    <div class="row trending_post_list mt-2 justify-content-around">
                        <div class="sub-title">
                            <h2>Trending</h2>
                        </div>
                        @foreach($trending as $post)
                        
                            <div class="trending_post col-12 col-md-4 mb-4">
                                <a href="/article/{{ $post->slug }}">
                                    <h5 class="author">{{ $post->author }}</h5>
                                    <h1 class="article_title">{{ $post->title }}</h1>
                                    <p class="date">{{ \Carbon\Carbon::parse($post->published_at)->format('Y F d') }}</p>
                                </a>
                            </div>
                        
                        @endforeach
                    </div>
                </div>

                <div class="horizontal_line"></div>

                {{-- Opinion Posts --}}
                <div class="opinion_collection">
                    <div class="row trending_post_list mt-2 justify-content-around">
                        <div class="sub-title">
                            <h2>Opinion</h2>
                        </div>
                        @foreach($opinion as $post)
                        
                            <div class="trending_post col-12 col-md-4 mb-4">
                                <a href="/article/{{ $post->slug }}">
                                    <h5 class="author">{{ $post->author }}</h5>
                                    <h1 class="article_title">{{ $post->title }}</h1>
                                    <p class="date">{{ \Carbon\Carbon::parse($post->published_at)->format('Y F d') }}</p>
                                </a>
                            </div>
                        
                        @endforeach
                    </div>
                </div>

                <div class="horizontal_line"></div>

                {{-- Video Posts --}}
                <div class="video_collection">
                    <div class="row trending_post_list mt-2 justify-content-around">
                        @foreach($videos as $post)
                        
                            <div class="trending_post col-12 col-md-4 mb-4">
                                <a href="/article/{{ $post->slug }}">
                                    <div class="video">
                                            <iframe width="100%" height="100%" 
                                                src="{{ $post->youtube_embed_url }}"
                                                frameborder="0"
                                                allowfullscreen > 
                                            </iframe>
                                    </div>
                                    <h1 class="video-title">{{ $post->title }}</h1>
                                </a>
                            </div>
                        
                        @endforeach
                    </div>
                </div>

            </div>
        </div>


        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('aos/aos.js')}}"></script>
        <script src="{{ asset('js/main.js')}}" defer></script>
        <script>
            AOS.init({ duration: 1000, once: false });
        </script>
</body>
</html>