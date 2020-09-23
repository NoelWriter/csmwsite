@extends('default')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <ul class="timeline">

            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">Middelburg Guide</span>
                        <span class="time-wrapper"><span class="time">2020 - present</span></span>
                    </div>
                    <div class="desc">My current project for my semester. The goal of this project is to help the city
                        of Middelburg by implementing a tour guide for blind or deaf people.
                    </div>
                </div>
            </li>

            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">Discord Bot</span>
                        <span class="time-wrapper"><span class="time">2020 - present</span></span>
                    </div>
                    <div class="desc">My current personal project. A chat bot for the communication platform discord,
                        this bot includes several features to enhance the Discord server user experience. The bot has
                        integration with this website. <br>
                        <a href="https://github.com/NoelWriter/CSMW-Discord" target="_blank" class="" style="color:white">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-link" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                                <path
                                    d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                            </svg>
                        </a>
                    </div>

                </div>
            </li>

            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">Sepia Opleidingen</span>
                        <span class="time-wrapper"><span class="time">2020 - 2020</span></span>
                    </div>
                    <div class="desc">A project for my internship. This web application functions as a panel for users
                        following courses at Sepia. The panel has several features like a payment system, user
                        administration and other course related features. The website was built using Laravel.
                    </div>
                </div>
            </li>

            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">osu!Tracker</span>
                        <span class="time-wrapper"><span class="time">2020 - 2020</span></span>
                    </div>
                    <div class="desc">A personal project for the rhythm game osu!, I used the google sheets api and the
                        osu! gameplay api to automatically track scores and create entries into a google sheets file.
                        This way it's possible to use that data to track progress over time.
                    </div>
                </div>
            </li>

            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">Wilca.org</span>
                        <span class="time-wrapper"><span class="time">2020 - 2020</span></span>
                    </div>
                    <div class="desc">A small project for an administration office. This is a custom designed website
                        built on WordPress showing information about the Wilca company. <br>
                        <a href="https://wilca.org/" target="_blank" class="" style="color:white">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-link" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                                <path
                                    d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </li>

            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">Korea University</span>
                        <span class="time-wrapper"><span class="time">2019 - 2019</span></span>
                    </div>
                    <div class="desc">I spent half a year in the nation of Korea for my minor. Here I did several
                        courses at Korea University, I did a lot of travelling across the country and even got to visit
                        Japan. Overall one of the best experiences in my life.
                    </div>
                </div>
            </li>

            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">United Harbour</span>
                        <span class="time-wrapper"><span class="time">2019 - 2019</span></span>
                    </div>
                    <div class="desc">A project for the company North Sea Ports. In this project we used Unity to create
                        a virtual recreation of one of the harbours, this virtual recreation was to be used in VR to
                        give tours.
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.container -->
@endsection

@section('script')
@endsection
