<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Huy Tran Developer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                    MENU                                    */
        /* -------------------------------------------------------------------------- */ 
        -->
        <div id="menu">
            <div id="menu_content" class="container">
                <div id="logo">
                    <h3><a href="#">huy.dev</a></h3>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <!-- <div id="arrow_decoration">
                        <img src="{{ asset('imgs/arrow_decoration.png') }}" alt="arrow_decoration">
                    </div> -->
                </nav>
            </div>
        </div>


        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                HERO SECTION                                */
        /* -------------------------------------------------------------------------- */
        -->
        <div id="hero_section">
            <div id="hero_content" class="container">
                <div id="avatar">
                    <img src="{{ asset('imgs/avatar.jpg') }}" alt="avatar">
                </div>
                <div id="intro">
                    <h2>
                        Hello, I'm <span>Huy Tran</span> 
                        <br /> 
                        A <span>Backend Developer</span>
                    </h2>
                    <div id="see_my_works">
                        <a href="#">See My Works</a>
                    </div>
                    <div id="highlight_decoration">
                        <img src="{{ asset('imgs/highlight_decoration.png') }}" alt="highlight decoration">
                    </div>
                    <div id="arrow_decoration">
                        <img src="{{ asset('imgs/arrow_decoration.png') }}" alt="arrow decoration">
                    </div>
                </div>
            </div>
            <div id="hero_wave">
                <img src="{{ asset('imgs/wave.png') }}" alt="hero wave">
            </div>
        </div>


        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                ABOUT ME                                    */
        /* -------------------------------------------------------------------------- */
        -->
        <div id="about_me">
            <h3>ABOUT ME</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div id="tech_stack">
            <div id="tech_stack_content" class="container">
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/html5.png') }}" alt="html5">
                    </div>
                    <p>HTML</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/laravel.png') }}" alt="laravel">
                    </div>
                    <p>Laravel</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/mysql.png') }}" alt="mysql">
                    </div>
                    <p>MySQL</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/css3.png') }}" alt="css">
                    </div>
                    <p>CSS</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/github.png') }}" alt="github">
                    </div>
                    <p>Github</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/javascript.png') }}" alt="javascript">
                    </div>
                    <p>Javascript</p>
                </div>
                <div class="tech_item">
                    <div class="tech_item_image">
                        <img src="{{ asset('imgs/jquery.png') }}" alt="jquery">
                    </div>
                    <p>JQuery</p>
                </div>
            </div>
        </div>


        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                PROJECTS                                    */
        /* -------------------------------------------------------------------------- */
        -->
        <div id="project">
            <div id="project_content" class="container">
                <h3>PROJECTS</h3>
                <div id="projects_list">
                    <div class="projects">
                        <div class="project_image">
                            <img src="{{ asset('imgs/project.png') }}" alt="project image">
                        </div>
                        <div class="about_project">
                            <h4>Project 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="project_actions">
                                <a href="#">View Demo</a>
                                <a href="#">Source Code</a>
                            </div>
                        </div>
                    </div>
                    <div class="projects">
                        <div class="project_image">
                            <img src="{{ asset('imgs/project.png') }}" alt="project image">
                        </div>
                        <div class="about_project">
                            <h4>Project 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="project_actions">
                                <a href="#">View Demo</a>
                                <a href="#">Source Code</a>
                            </div>
                        </div>
                    </div>
                    <div class="projects">
                        <div class="project_image">
                            <img src="{{ asset('imgs/project.png') }}" alt="project image">
                        </div>
                        <div class="about_project">
                            <h4>Project 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="project_actions">
                                <a href="#">View Demo</a>
                                <a href="#">Source Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                CONTACT ME                                  */
        /* -------------------------------------------------------------------------- */
        -->
        <div id="contact">
            <div id="contact_content" class="container">
                <h3>CONTACT ME</h3>
                <div id="contacts_list">
                    <div class="contacts">
                        <div id="location_icon">
                            <img src="{{ asset('imgs/location.png') }}" alt="location">
                        </div>
                        <p>Fairfax, Virginia, USA</p>
                    </div>
                    <div class="contacts">
                        <div id="email_icon">
                            <img src="{{ asset('imgs/email.png') }}" alt="email">
                        </div>
                        <p>huytran.backend@gmail.com</p>
                    </div>
                    <div class="contacts">
                        <div id="linkedin_icon">
                            <img src="{{ asset('imgs/linkedin.png') }}" alt="linkedin">
                        </div>
                        <p>huy-tran-dev</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- 
        /* -------------------------------------------------------------------------- */
        /*                                FOOTER                                      */
        /* -------------------------------------------------------------------------- */
        -->
        <div id="footer">
            <p>All rights reserved © 2024 Huy Tran</p>
        </div>
    </body>
</html>
