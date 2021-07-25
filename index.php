<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lukhanyo's Portfolio</title>
</head>

<body>
    <?php
        $page = 'home';
        include_once "includes/header.php";
    ?>
    <h1 id="my_name">Lukhanyo Matshebelele</h1>
    <h3 id="job_title">Web Developer</h3>
    <button id="projects_button">View My Projects</button>

    <main>
        <div class="container">
            <figure class="projects">
                <img src="images/library_screenshot.png" alt="Library project">
                <figcaption>
                    <h2>Book Library</h2>
                    <p class="description">A library app that stores books. It makes use of the Web Storage API to save
                        books in the user's browser.</p>
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>, <u>Javascript</u></p>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/project-library" target="_blank"><i class="fa fa-github"
                                style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/project-library/" target="_blank"><i
                                class="fas fa-eye"></i> Live Preview</a>
                    </div>
                </figcaption>
            </figure>

            <!-- Second Project-->
            <figure class="projects">
                <img src="images/tictactoe_game_screenshot.png" alt="Tic Tac Toe Game">
                <figcaption>
                    <h2>Tic Tac Toe Game</h2>
                    <p class="description">This is a two player Tic Tac Toe game. The module pattern is used to minimise
                        the global code.</p>
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>, <u>Javascript</u></p>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/Project---Tic-Tac-Toe" target="_blank"><i
                                class="fa fa-github" style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/Project---Tic-Tac-Toe/" target="_blank"><i
                                class="fas fa-eye"></i> Live Preview</a>
                    </div>
                </figcaption>
            </figure>

            <!--Third Project-->
            <figure class="projects">
                <img src="images/restaurant_screenshot.png" alt="Restaurant Website">
                <figcaption>
                    <h2>Restaurant Website</h2>
                    <p class="description">This website uses Javascript only to dynamically render its contents and
                        Webpack for bundling modules.</p>
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>, <u>Javascript</u>, <u>Webpack</u></p>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/restaurant-website/tree/master" target="_blank"><i
                                class="fa fa-github" style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/restaurant-website/" target="_blank"><i
                                class="fas fa-eye"></i> Live Preview</a>
                    </div>
                </figcaption>
            </figure>

            <!--Fourth Project-->
            <figure class="projects">
                <img src="images/todolist_project_screenshot.png" alt="To Do List App">
                <figcaption>
                    <h2>To Do List App</h2>
                    <p class="description">This To Do List app uses the Web Storage API to save projects and tasks in
                        the user's computer.</p>
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>, <u>Javascript</u>, <u>Webpack</u></p>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/project-todo-list/tree/master" target="_blank"><i
                                class="fa fa-github" style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/project-todo-list/" target="_blank"><i
                                class="fas fa-eye"></i> Live Preview</a>
                    </div>
                </figcaption>
            </figure>

            <!--fifth Project-->
            <figure class="projects">
                <img src="images/index.png" alt="To Do List App">
                <figcaption>
                    <h2>TDD Practice</h2>
                    <p class="description">This is a test driven development practice using Jest. view live previews of
                        the first two tests: <a href="https://luka2lkay.github.io/capitalize-string/"
                            target="_blank">capitaliseString</a> and <a
                            href="https://luka2lkay.github.io/reverse-string/" target="_blank">reverseString.</a></p>
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>, <u>Javascript</u>, <u>Jest</u></p>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/TDD-practice" target="_blank"><i class="fa fa-github"
                                style="font-size:24px"></i> View Code</a>
                    </div>
                </figcaption>
            </figure>

            <!--sixth Project-->
            <figure class="projects">
                <img src="images/asyncpromises.jpeg" alt="To Do List App">
                <figcaption>
                    <h2>Promises</h2>
                    <p class="description">This small coding project demonstrates my understanding of promises by using
                        fetch with the giphy API to display a random gif.
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>,<u>Promises</u>,<u>fetch</u>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/giphy-api" target="_blank"><i class="fa fa-github"
                                style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/giphy-api/" target="_blank"><i class="fas fa-eye"></i> Live
                            Preview</a>
                    </div>
                </figcaption>
            </figure>

            <!--seventh Project-->
            <figure class="projects">
                <img src="images/Weather_App.png" alt="Weather App">
                <figcaption>
                    <h2>Weather App</h2>
                    <p class="description">This project demonstrates my understanding of promises by using fetch with
                        the weather API to display the current weather of a city.
                    <h3>Skills used</h3>
                    <p class="skills"><u>HTML</u>, <u>CSS</u>,<u>Promises</u>
                    <div id="project_links">
                        <a href="https://github.com/Luka2Lkay/weather-api" target="_blank"><i class="fa fa-github"
                                style="font-size:24px"></i> View Code</a>
                        <a href="https://luka2lkay.github.io/weather-api/" target="_blank"><i class="fas fa-eye"></i>
                            Live Preview</a>
                    </div>
                </figcaption>
            </figure>
        </div>
    </main>
    <footer>
        <a href="https://www.linkedin.com/in/lukhanyo-matshebelele/" target="_blank"><i
                class="fa fa-linkedin-square"></i></a>
        <p>&copy;Lukhanyo Matshebelele</p>
        <a href="https://github.com/Luka2Lkay" target="_blank"><i class="fa fa-github"></i></a>
        <a href="https://www.facebook.com/lukhanyo.matshebelele/" target="_blank"><i class="fa fa-facebook-f"></i></a>
    </footer>
    </div>
    <script src="script.js"></script>
</body>

</html>