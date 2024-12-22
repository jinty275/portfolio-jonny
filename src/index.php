<!DOCTYPE html/>
<html>
<head>
    <title>My Portfolio</title>

    <!-- Links in the syle sheet -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

</head>
<body>

    <!-- Navigation -->
    <nav>
        <ul class="listSpec">
            <li><a href="#" onclick="scrollToSection('skillsSection')">Skills</a></li>
            <li><a href="#" onclick="scrollToSection('projectsSection')">Projects</a></li>
            <li><a href="#" onclick="scrollToSection('aboutMeSection')">About Me</a></li>
        </ul>
    </nav>
    <br>
    <!-- Introduction -->
    <div class="mainImgContainer">
        <div class="introHeader">
        <header>
            <h1>Hi, I am Jonny || Junior Software Developer</h1>
        </header>
        <p>
            I greatly enjoy the challenge of creating and developing software, as well as learning new skills.
            I am also a gamer, model maker and a bit of a sci-fi nerd. 
        <p>
        </div>
    </div>
    
    <!-- Skills Section -->
    <section id="skillsSection">
    <br><br>
        <h2>Skills</h2>

        <!-- Program Languages -->
        <div class="iconContainer">
            <h3>Program Languages</h3>
            <figure class="icon-figure">
                <i class="fa-brands fa-html5"></i>
                <figcaption>HTML 5</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-regular fa-file-code"></i>
            <figcaption>CSS</figcaption>
            </figure>        
            <figure class="icon-figure">
                <i class="fa-brands fa-php"></i>
                <figcaption>PHP</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-brands fa-js"></i>
                <figcaption>JS</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid fa-scroll"></i>
            <figcaption>jQUERY</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid mysqlIco fa-database"></i>
                <figcaption>mySQL</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid sqlIco fa-database"></i>
                <figcaption>SQL</figcaption>
            </figure>
        </div>
        
        <br>

        <!-- Program Tools -->
        <div class="iconContainer">
            <h3>Tools</h3>
            <figure class="icon-figure">
                <i class="fa-brands fa-git-alt"></i>
                <figcaption>Git</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-brands fa-github"></i>
                <figcaption>Github</figcaption>
            </figure>
            
            <figure class="icon-figure">
                <i class="fa-brands fa-aws"></i>
                <figcaption>AWS</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid fa-code-commit"></i>
                <figcaption>AWS S3</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-brands fa-docker"></i>
                <figcaption>Docker</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid fa-bug"></i>
                <figcaption>Zendesk</figcaption>
            </figure>
            
            <br>
            
            <figure class="icon-figure">
            <i class="fa-solid fa-laptop-code"></i>
                <figcaption>Visual Studio</figcaption>
            </figure>
            <figure class="icon-figure">
                <i class="fa-solid fa-server"></i>
                <figcaption>SQL Workbench</figcaption>
            </figure>
        </div>
    </section>
    
    <br>
    
    <!-- Projects Section -->
    <section id="projectsSection">
    <br><br>
        <h2>Projects</h2>
        <?php
        $projects = [
            [
                'title' => 'Auto-generated reports',
                'description' => 'This project was created to help the clients of the company I worked for, Wearelanded, to generate reports automatically. The reports are generated from the data stored in the database. What the clients choose to see in the report is what they got.',
                'skills' => ['php', 'mySQL', 'SQL', 'js', 'jQuery']
            ],
            [
                'title' => 'Upgrades bootstrap styles and functionality',
                'description' => 'This project was during my time at Wearelanded and it was to update the platform from bootstrap 4 to bootstrap 5. While this was going on functionality was also updated and improved.',
                'skills' => ['php', 'css', 'js', 'jQuery']
            ],
            [
                'title' => 'Functionality and style upgrades',
                'description' => 'This project was during my time at Zymplify and it was to update the css and overall functionality of the platform. This involved updating modals, buttons, and the overall look of the platform, as well as moving inline styles and internal styles to external stylesheets.',
                'skills' => ['php', 'css', 'js', 'jQuery']
            ],
            [
                'title' => 'Round-robin integration',
                'description' => 'This project was also during my time at Zymplify and was created to assign multiple candidates to multiple employees. In order to process the workload more efficiently.',
                'skills' => ['php', 'mySQL', 'SQL', 'js', 'jQuery']
            ]
        ];

        foreach ($projects as $project) {
            error_log(print_r($project, true));
            echo "<div class='projectContainer'>";
            echo "<h3>{$project['title']}</h3>";
            echo "<p>{$project['description']}</p>";
            echo "<row class='projectSkills'>";
            foreach ($project['skills'] as $skill) {
                if (strpos($skill, 'mySQL') !== false || strpos($skill, 'jQuery') !== false) {
                    $class = 'rSkillB';
                } else {
                    $class = 'rSkill';
                }
                echo "<div class='{$class}'><span>{$skill}</span></div>";
            }
            echo "</row>";
            echo "</div><br>";
        }
        ?>
     </section>
     <br><br><br>

     <!-- Projects Section -->
    <section id="aboutMeSection">
        <h2>About Me</h2>
        <div class="aboutMeContainer">
            <p>
                My other hobbies include gaming, model making, and sci-fi. I have always been a fan of sci-fi, used to be just movies and tv shows but now I have started reading sci-fi books as well.
                This includes the horus heresy series, a series I would love to see on the big screen one day. In terms of gaming, I am a fan of the total war series, the elder scrolls series, and the fallout series.
                Ever since I was a child I have always been interested in technology and how things work. 
            </p>
            <p>
                From taking apart my toys to see how they functioned to eventually 3d printing an iron man helmet, which I later kitted out to light up and open and close at the push of a button.
                I have always been interested in how things work and how they can be improved. 
                I believe this carries over to web and software development too, where I hope to expand my knowledge and skills.
                If you wish to contact me you can do so by email at: <a href="mailto:jrsc-94@hotmail.co.uk" class="email-link">jrsc-94@hotmail.co.uk</a>
            </p>

            <a class="cvL" href="assets/JonathanCarlisleCV.pdf" download="JonathanCarlisleCV.pdf"><strong>Download My CV</strong></a>
        </div>
    </section>
    <br><br>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Jonny Calisle's Portfolio. All rights reserved</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>