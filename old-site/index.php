<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Andrew Lord's Online Portfolio</title>
    <link href="style/reset.css" rel="stylesheet" media="screen"
	    type="text/css" />
    <link href="style/main-layout.css" rel="stylesheet" media="screen"
	    type="text/css" />
    <link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet"
	    media="screen" type="text/css" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="scripts/jquery-1.8.0.min.js"></script>
    <script src="scripts/jquery.easing.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="scripts/jquery.preload.js"></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script type="text/javascript"
	    src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript"
	    src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript"
	    src="scripts/html5media.min.js"></script>
    <script type="text/javascript"
	    src="scripts/main-page.js"></script>
</head>
<body>
	<div id="page">
		<div id="sidebar">
			<nav>
				<div id="nav_logo">
					<span>Portfolio of</span>Andrew Lord
				</div>
				<ul>
					<li class="nav_selected" id="nav-1"><a href="#home">Home</a></li>
					<li id="nav-2"><a href="#about">About</a></li>
					<li id="nav-3"><a href="#work">Projects</a></li>
					<li id="nav-4"><a href="#degree">Degree</a></li>
					<li id="nav-5"><a href="#photos">Photos</a></li>
					<li id="nav-6"><a href="#contact">Contact</a></li>
				</ul>
				<div id="nav_bottom"></div>
			</nav>
		</div>
		<div id="main-content">
			<section id="home">
				<div id="loader"></div>
				<div id="ip_container">
					<div id="ip_image">
						<img src="images/ip/1.jpg" alt="image_one" />
					</div>
					<div id="ip_next"></div>
					<div id="ip_prev"></div>
					<ul id="ip_nav">
						<li class="ip_selected"><a href="images/ip/1.jpg"
							rel="images/ip/1-small.jpg">Image 1</a></li>
						<li><a href="images/ip/2.jpg" rel="images/ip/2-small.jpg">Image
								2</a></li>
						<li><a href="images/ip/3.jpg" rel="images/ip/3-small.jpg">Image
								3</a></li>
						<li><a href="images/ip/4.jpg" rel="images/ip/4-small.jpg">Image
								4</a></li>
						<li><a href="images/ip/5.jpg" rel="images/ip/5-small.jpg">Image
								5</a></li>
						<li id="ip_preview_container">
							<div id="ip_preview"></div> <span></span>
						</li>
					</ul>
				</div>
				<div class="section_header">
					<h1>Welcome to my Online Portfolio</h1>
				</div>
				<div class="myself">
					<div class="figure">
						<img src="images/me-small.png" alt="Image" />
					</div>
					<blockquote>
						<p>Hello I am Andrew Lord and welcome to my online portolio. It contains a profile of my skills, experience and projects. There is also plenty of information about my interests and my university degree.</p>
                        <p>Please do not hesitate to contact me if you have any questions. I will happily respond and provide a copy of CV if you wish to have a look.</p>
					</blockquote>
				</div>
				<div id="work_areas" class="columns">
					<h2>My Areas of Work</h2>
					<div class="three_column">
						<h3>Applications / Apps</h3>
						<div class="figure zoom">
							<a href="images/projects/ocado.png" rel="work_areas"><img
								src="images/projects/ocado-small.png" alt="Apps" /></a>
						</div>
						<p>The main app I have worked on is the <a href="http://play.google.com/store/apps/details?id=com.ocado.mobile.android">Ocado Android app</a>, to which I have introduced a large number of new features and new technologies.
							I have also been developing my own Android app in my spare time, called SplitBot.</p>
					</div>
					<div class="three_column">
						<h3>Video Games</h3>
						<div class="figure zoom">
							<a href="images/projects/wacky-bat-icon.png" rel="work_areas"><img
								src="images/projects/wacky-bat-icon-small.png"
								alt="Video Games" /></a>
						</div>
						<p>I have written my own mobile game using Unity3D, <a href="http://play.google.com/store/apps/details?id=com.blastcapgames.wackybat">Wacky Bat</a>.
                            I was also part of a team at university developing an Xbox 360 game called Resonance in C# using XNA.</p>
					</div>
					<div class="three_column last_column">
						<h3>Artificial Intelligence</h3>
						<div class="figure zoom">
							<a href="images/projects/ai.png" rel="work_areas"><img
								src="images/projects/ai-small.png" alt="Artificial Intelligence" /></a>
						</div>
						<p>My final year project at university involved using Reinforcement Learning to learn a robot AI for the game Robocode. I also wrote the enemy AI for Resonance.</p>
					</div>
				</div>
				<div id="work_areas2" class="columns">
					<div class="three_column">
						<h3>Graphics</h3>
						<div class="figure zoom">
							<a href="images/projects/ray_tracer.png" rel="work_areas"><img
								src="images/projects/ray_tracer-small.png"
								alt="Graphics" /></a>
						</div>
						<p>I have experienced various different aspects of computer
							graphics. My favourite part was developing a ray tracer in C++
							and learning about the graphics pipeline. However, I have also
							studied image processing and used Autodesk Maya to create some 3D
							models.</p>
					</div>
					<div class="three_column">
						<h3>Databases</h3>
						<div class="figure zoom">
							<a href="images/projects/sql.png" rel="work_areas"><img
								src="images/projects/sql-small.png" alt="Databases" /></a>
						</div>
						<p>Databases are very useful in many different situations and
							applications. I have used many different database technologies,
							mostly SQL and relational databases like Oracle and Derby,
							however, recently also the schema-less database MongoDB.</p>
					</div>
					<div class="three_column last_column">
						<h3>Websites</h3>
						<div class="figure zoom">
							<a href="images/projects/portfolio-website.png" rel="work_areas"><img
								src="images/projects/portfolio-website-small.png"
								alt="Websites" /></a>
						</div>
						<p>Web design and its appropriate technologies are a useful
							skill set to have. Their use within a company can often go beyond
							just writing websites. I have written a company website for
							Crosscrown Ltd and also wrote this portfolio website.</p>
					</div>
				</div>
			</section>
			<section id="about">
				<div class="section_header">
					<h1>About Me</h1>
				</div>
				<h2>Profile</h2>
				<div class="figure">
					<img src="images/me.jpg" alt="Image of Me" />
				</div>
				<p>A hardworking and pioneering software developer with a genuine passion for mobile application development. Proven success, both professionally and academically, achieving a first-class MEng Computer Science degree. Excellent communication and team-working skills enhanced by programming qualifications, with experience in designing, implementing, testing and supporting mobile and tablet applications in collaborative environments.</p>
				<p>I have experience in many different programming languages, libraries and technologies. My key programming skills are in Java, Android SDK, C#, Unity3D, with some Pyton and C/C++. My other technical skills cover SQL, JavaScript, HTML, CSS, XML, JSON and interfacing with RESTful Web Services.
                    I have a good knowledge of Linux, Mac and MS Windows Operating Systems and 
                    hardware knowledge gained through over 10 years of computer building and 
                    maintenance. I have experience in important software engineering
                    practices such as agile development, Android Studio, Eclipse, Visual Studio
                    and Git Version Control. I am known for writing clean, maintainable and efficient code, that takes industry best practices into account. I am also innovative, organised and a good team-player.</p>
				<p>Beyond programming, my other interests include video games, photography, attending live stand-up comedy
                    and music concerts, as well as going to the cinema. I also was a member of the University of Bristol Motorsport society.</p>
				<h2>Experience</h2>
				<h3>
					Android Software Engineer - <a href="http://www.ocadotechnology.com/">Ocado</a><br />September 2013 - Present Hatfield, UK
				</h3>
				<p>Key member within the mobile development team, working on the Ocado Android application. Since joining the company, I have had a large impact on the Android team, introducing many new technologies which have improved code quality and productivity.
                    <ul>
                        <li>Design, develop, test, support and deploy Ocado Android applications. This has involved developing new
                    Java code using the Android SDK, combined with SQL for the Android SQLite database and dealing with XML and JSON data being received from the Ocado web services. Working on the full development lifecycle from feature conception through to deploying and supporting.</li>
                        <li>Investigate and resolve customer issues, providing bug fixes when necessary.</li>
                        <li>Debug problems in both the Android and iOS apps, so I am able to read the iOS Objective-C code.</li>
                        <li>Research Android best practices and improve application performance and stability.</li>
                        <li>Communicate effectively with server-side developers, UX designers and other members of the business.</li>
                        <li>Test the application on emulators and devices with a variety of screen-sizes and specifications.</li>
                        <li>Maintain Jenkins/Hudson build jobs and Git repository branches for the Android project. This includes
                    performing Git merges and tagging releases.</li>
                        <li>Contribute to sprint reviews and planning sessions, following the Agile development paradigm.</li>
                    </ul>
                </p>
				<h3 id="snsystems">
					Summer Intern - <a href="http://www.snsys.com/">SN Systems - Sony Computer Entertainment Europe</a><br />July
					- September 2012 Bristol, UK
				</h3>
				<p>Design, development and documentation of a test result visualisation system. The system is accessed through a web interface and plots software build statistics which have been stored in a database. Working as sole developer, I received a specification and discussed requirements with the department manager, then consulted with other members of the department. Development involved a HTML and JavaScript interface, with a Python web server, that can collect data from the MongoDB database and the Perforce version control system. I gave a presentation to the company management and the Tool-chain team on the system. I gained experience writing software within a large company. This included catering to the wishes of many users, making compromises where needed, whilst also developing and delivering the product to schedule.</p>
				<h3>
					Freelance Software Engineer - <a
						href="http://www.rugbycarehomes.co.uk">Crosscrown Ltd</a><br />July
					- September 2011 Rugby, UK
				</h3>
				<p>
					Specification, design and development of a care plan system for the
					companies group of care homes. I worked as sole developer where
					requirements were discussed with management and the user group.
					Implementation was then done in C# and allowed the carers to create
					file collections for the residents and access and modify the care
					plans through an intuitive interface. I also provided support after
					installing the system in the care homes. After producing the
					software, and designed and produced a <a
						href="http://www.rugbycarehomes.co.uk">website for the company</a>.
				</p>
				<h3>
					Freelance Software Engineer - Chris Mullaney<br />September 2010
					Daventry, UK
				</h3>
				<p>Worked with an experienced developer on a software system for
					an executive car company. It provided an opportunity to learn,
					whilst also using initiative and problem solving skills to design
					and create software for a client.</p>
				<h3>
					Machine Operator and Assistant - <a
						href="http://www.quickaxis.co.uk">Quick Axis</a><br />July -
					September 2009 Daventry, UK
				</h3>
				<p>Assisted the manager in running precision cutting machines
					to cut materials to the client's requirements. I held a position of
					responsibility where I was trusted to operate the machines alone,
					handling the materials that were cut and packaged for the
					client. Organisation and time-management was of utmost importance,
					as it was crucial to meet deadlines.</p>
			</section>
			<section id="work">
				<div class="section_header">
					<h1>My Projects</h1>
				</div>
				<div class="project_container" id="splitbot">
					<h2>SplitBot</h2>
                    <div class="figure left_image zoom">
                        <a href="images/projects/splitbot.png" rel="projects"><img
                            src="images/projects/splitbot-small.png"
                            alt="SplitBot Screenshot" /></a>
                    </div>
					<p>An Android app which is being gradually developed in my spare time.
                        If you go out to eat or drink as a group and wish
                        to divide the bill up amongst you, SplitBot takes the hassle out of it.
						The app allows you to simply enter the prices of the items
						each person purchased, it will then give back the total each
						person needs to pay. It uses the location settings on the
						phone to use the appropriate currency. It will support some more advanced features such as applying item discounts, taxes, tips, storing past bills and sharing them with other people. It will be quicker and easier to use than any similar alternatives.</p>
				</div>
				<div class="project_container" id="wackybat">
					<h2>Wacky Bat</h2>
					<div class="figure right_image zoom">
						<a href="images/projects/wacky-bat.png" rel="projects"><img
							src="images/projects/wacky-bat-small.png"
							alt="Wacky Bat Screenshot" /></a>
					</div>
					<p>A 2D mobile game written in C# using the Unity engine. The game is currently released on <a href="http://play.google.com/store/apps/details?id=com.blastcapgames.wackybat">Google Play</a> and will be released on iOS at some point in the future. The game includes: simple and intuitive controls, increasing difficulty as you play, catchy background music and tracking of various game-play statistics. I used the name Blast Cap Games for releasing Wacky Bat, please see the <a href="http://www.blastcapgames.co.uk/">Blast Cap Games</a> website for more information.</p>
                    <div id="wacky_bat_second" class="figure right_image zoom">
						<a href="images/projects/wacky-bat2.png" rel="projects"><img
							src="images/projects/wacky-bat2-small.png"
							alt="Wacky Bat Screenshot" /></a>
					</div>
					<p><a href="http://play.google.com/store/apps/details?id=com.blastcapgames.wackybat"><img src="images/google-play-badge.png" alt="Wacky Bat on Google Play" /></a></p>
				</div>
				<div class="project_container" id="fyp">
					<h2>Final Year Project</h2>
					<p class="no_image">The project used Reinforcement Learning with the game
                        Robocode. Robocode is an
                        open source Java game, that allows programmed robots to
                        fight each other in battles. The project consisted of
                        developing a Reinforcement Learning framework to allow people
                        to play robots that have learned their behaviour in the game.
                        The Reinforcement Learning algorithm managed to learn a behaviour that could beat
                        a hand-coded robot.</p>
				</div>
				<div class="project_container" id="rda">
					<h2>RDA</h2>
                    <div id="rda_images">
					    <div class="figure zoom">
						    <a href="images/projects/rda.png" rel="projects"><img
							    src="images/projects/rda-small.png"
							    alt="RDA App Screenshot" /></a>
					    </div>
					    <div id="rda_right_image" class="figure zoom">
						    <a href="images/projects/rda2.png" rel="projects"><img
							    src="images/projects/rda2-small.png"
							    alt="RDA App Screenshot" /></a>
					    </div>
                    </div>
					<p>An Android app written as a group at University. RDA will monitor your
						progress when you are out for a run. It recognises if you are running 
						a route you have done before so it can store the statistics as a new 
						run or as an existing run. RDA features text-to-speech feedback on your 
						progress as well as music playback that can be controlled with motion 
						controls. Music genres can be linked to different running speeds, allowing 
						RDA to play different music depending on your running speed. It is a full 
						Running Digital Assistant.</p>
				</div>
				<div class="project_container" id="resonance">
					<h2>Resonance</h2>
					<div class="figure right_image zoom">
						<a href="images/projects/resonance2.png" rel="projects"><img
							src="images/projects/resonance2-small.png"
							alt="Resonance Screenshot" /></a>
					</div>
					<p>A team games project which is written in C# using XNA for
						the Xbox 360. It is a co-operative game with one player controlling
						the movement of the on-screen character using a standard Xbox 360
						controller, while the other uses the drum kit controller to attack
						the enemies. It combines action with music-based rhythmic game-play.
						The team had six members who each worked on different parts of
						the game, often working together on larger sections. The main
						areas of the game that I worked on were: physics, enemy AI, screen
						manager, menus and aspects of the game-play.</p>
					<div id="resonance_second" class="figure right_image zoom">
						<a href="images/projects/resonance3.png" rel="projects"><img
							src="images/projects/resonance3-small.png"
							alt="Resonance Screenshot" /></a>
					</div>
					<p><a href="http://code.google.com/p/resonance-game/">Resonance on
						Google Code</a></p>
                    <video poster="images/projects/resonance_video_poster.png" width="450" height="248" controls preload> 
                        <source src="images/projects/resonance_video.webm" type="video/webm" />
                        <source src="images/projects/resonance_video.mp4" type="video/mp4" />
                        <source src="images/projects/resonance_video.ogg" type="video/ogg" />
                        <object data="images/projects/resonance_video.mp4" width="450" height="248">
                            <!--<embed src="resonance_video.swf" width="320" height="240" />-->
                        </object> 
                    </video>
				</div>
				<div class="project_container" id="raytracer">
					<h2>Ray Tracer</h2>
					<div class="figure left_image zoom">
						<a href="images/projects/ray_tracer.png" rel="projects"><img
							src="images/projects/ray_tracer-small.png"
							alt="Resonance Screenshot" /></a>
					</div>
					<p>A programming project in computer graphics. The ray tracer
						was written in C++ and makes use of a strong class hierarchy to
						give room for expansion. It is capable of producing a rendered
						image of the scene. Many features were
						implemented including various 3D shapes, lighting, shadows,
						reflections, Lambert and Phong materials, bounding volumes and
						flat triangle meshes.</p>
				</div>
				<div class="project_container" id="olympoid">
					<h2>Olympoid 3D Model</h2>
					<div class="figure right_image zoom">
						<a href="images/projects/olympoid.png" rel="projects"><img
							src="images/projects/olympoid-small.png"
							alt="Olympoid Model 1080p Render" /></a>
					</div>
					<p>A 3D model created using Autodesk Maya. The concept was for
						a robotic competitor for the 2040 Olympic games. All geometry was
						created from scratch using polygonal modelling and the various
						tools within Maya. A lighting rig was setup with textures and shaders
						applied to the model. The robot features a strengthened upper body,
						cables to power each part of the body and limbs to allow it to
						easily compete in various Olympic events. The robot is a competitor
                        for Japan, as represented by the colour scheme.</p>
				</div>
				<div class="project_container" id="crosscrown_careplan">
					<h2>Care Plan System</h2>
					<div class="figure left_image zoom">
						<a href="images/projects/care_plan_system.png" rel="projects"><img
							src="images/projects/care_plan_system-small.png"
							alt="Care Plan System Screenshot" /></a>
					</div>
					<p id="care_plan_text">An application to allow carers to manage the care plans of
						all the residents in the care home. It was developed for
						Crosscrown Ltd who are a care home company in Rugby.
                        This consisted of meeting with management to decide on
						the requirements, design the system and then to implement through
						to completion. I also provided subsequent support to the managers
						of the various homes. The application was written in C#, due to
						the fact that the machines to run it all used Windows 7.</p>
				</div>
				<div class="project_container" id="crosscrown_website">
					<h2>Crosscrown Ltd Website</h2>
					<div class="figure right_image zoom">
						<a href="images/projects/crosscrown_website.png" rel="projects"><img
							src="images/projects/crosscrown_website-small.png"
							alt="Home page for Crosscrown Ltd website" /></a>
					</div>
					<p>A company website to make information about the companies
						care homes more accessible to the public. It allows people who are
						interested to find out more about the company and it's services. I
						researched other companies in the care home sector and decided
						upon a website layout and design. The logo was the first time I
						had designed and created a logo. The website was all developed
						from scratch using PHP to provide a server-side contact form.</p>
					<p><a href="http://www.rugbycarehomes.co.uk/">Crosscrown Ltd
						Website</a></p>
				</div>
				<div class="project_container" id="figure8">
					<h2>Figure8</h2>
					<div class="figure left_image zoom">
						<a href="images/projects/figure8.png" rel="projects"><img
							src="images/projects/figure8-small.png"
							alt="Figure8 Song-writing Tool Screenshot" /></a>
					</div>
					<p>A song-writing tool, written in Java as a group project at
						university. Java was used to allow the system to work
						cross-platform and it was tested on Linux, Windows and Mac. The
						tool allows you to write a song by recording layered sound loops.
						You record one layer, then play it back and record
						another layer along with it. This process can be repeated to
						produce loops which are then sequenced together into a song. I
						worked on saving and loading of projects, visualisations for the
						different layers and various other tasks.</p>
					<p><a href="http://code.google.com/p/figure8/">Figure8 on Google
						Code</a></p>
				</div>
			</section>
			<section id="degree">
				<div class="section_header">
					<h1>My Degree</h1>
				</div>
				<div class="figure">
					<a href="http://www.cs.bris.ac.uk"> <img src="images/bristol.png"
						alt="University of Bristol Image" />
					</a>
				</div>
                <p>2009 – 2013 – UNIVERSITY OF BRISTOL<br />MEng Computer Science (First-class)<br />Certificate of Achievement for the Best third year student in Computer Science, sponsored by Netcraft Ltd.</p>
				<h2>Favourites</h2>
                <h3>Individual Project</h3>
                <p>The final-year project of the degree program. It involves the
                    engagement in a large piece of self-directed, independent work.
                    This involves in-depth investigation, experimentation and research
                    into an area of your choice. I worked on using Reinforcement
                    Learning for the video game Robocode.</p>
				<h3>Mobile Development</h3>
				<p>Covered the theory behind mobile technologies and systems, from mobile devices through to 3G and GPS.
                The coursework involved developing an Android application as a team of three. We developed an app for workouts that tracks the route the user is running, automatically detecting if it is a previously run route and then providing audio feedback based on performance compared to previous runs. Combined with this the app also selects songs to play based on the users current running speed. I developed the media player part of the app, including the song selection mechanism that works by connecting different genres of music to running speeds.</p>
				<h3>Group Games Project</h3>
				<p>Working as part of a team to develop a large scale system, a
					video game. Each team specifies and designs a game that they will
					create, they then implement and integrate the game through to
					completion. The final game is then presented and demonstrated to a
					board of markers and the general public at a games day event in the
					department.</p>
				<h3>Computer Graphics</h3>
				<p>Developing understanding of the issues within computer
					graphics and rendering of real world objects on a computer. Ray
					tracing and the graphics pipeline were covered extensively, as well
					as the maths required to understand it. The coursework involved
					writing a ray tracer in C++, which could have lots of different
					features including various shapes, lights and the Lambert and Phong
					materials.</p>
				<h3>Learning in Autonomous Systems</h3>
				<p>The use of learning algorithms to solve real-world problems.
					Various different learning algorithms were covered including
					genetic algorithms, reinforcement learning and hill-climbers. The
					coursework consisted of writing an evolutionary algorithm to solve
					the Vehicle Routing Problem and experimenting with a reinforcement
					learner playing noughts and crosses.</p>
				<h3>Artificial Intelligence and Logic Programming</h3>
				<p>Forming skills in logic programming through the use of
					Prolog. Artificial intelligence was also discussed through learning
					about different types of graph algorithms and heuristics such as A*
					and Depth-First Search. Coursework involved implementing solutions
					to various different problems using Prolog, Progol4 and Progol5.</p>
				<h3>Character and Set Design</h3>
				<p>Developing 3D modelling skills to create computer generated
					characters and structures. The unit covered using Autodesk Maya.
					The coursework involved designing and creating a static character
					which would compete in the robotic 2040 Olympic games. This
					involved creating geometry, lighting, texturing and applying
					shaders.</p>
				<h3>Language Engineering</h3>
				<p>The knowledge that goes into creating and compiling a new
					programming language. The various optimisation techniques were
					covered including loop unrolling. Coursework involved creating a
					compiler using Lexical Analysis, Syntax Analysis, IR Tree
					Construction and Code Generation.</p>
				<h3>Computer Architecture</h3>
				<p>An overview of the world of computer architecture, ranging
					from computer circuits, how different architectures work and the
					circuits that they are made from, to compilers and assemblers. The
					coursework involved using Verilog to write circuits to solve
					various problems and writing an assembler and emulator for a simple
					system.</p>
				<h2>Also</h2>
				<div class="columns">
					<div class="two_column">
						<h3>Web Technologies</h3>
						<h3>Image Processing and Computer Vision</h3>
						<h3>Introduction to Machine Learning</h3>
						<h3>Software Product Engineering</h3>
						<h3>Data Structures and Algorithms</h3>
						<h3>Symbols, Patterns and Signals</h3>
						<h3>Human-Computer Interaction</h3>
						<h3>Concurrency and Communications</h3>
						<h3>Professional Studies</h3>
					</div>
					<div class="two_column last_column">
						<h3>Procedural Programming</h3>
						<h3>Principles of Programming</h3>
						<h3>Theory of Computation</h3>
						<h3>HiTec Enterprise</h3>
						<h3>Origins of Computer Science</h3>
						<h3>Object-Oriented and Functional Programming</h3>
						<h3>Discrete Mathematics</h3>
						<h3>Continuous Mathematics</h3>
					</div>
				</div>
			</section>
			<section id="photos">
				<div class="section_header">
					<h1>My Photography</h1>
				</div>
				<p>I enjoy photography in my spare time, here are some of the
					photos I have taken.</p>
				<ul class="list">
					<li>
						<div class="figure zoom">
							<a href="images/photos/1.jpg" rel="photos"><img
								src="images/photos/1-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">The Colosseum, Rome</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/2.jpg" rel="photos"><img
								src="images/photos/2-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Cloud Shapes</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/3.jpg" rel="photos"><img
								src="images/photos/3-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Cardiff Bay</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/4.jpg" rel="photos"><img
								src="images/photos/4-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Footprints</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/5.jpg" rel="photos"><img
								src="images/photos/5-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Mountain Path</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/6.jpg" rel="photos"><img
								src="images/photos/6-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Don't Sink</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/7.jpg" rel="photos"><img
								src="images/photos/7-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Clifton Suspension Bridge</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/8.jpg" rel="photos"><img
								src="images/photos/8-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Roman Arch</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/9.jpg" rel="photos"><img
								src="images/photos/9-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Hogwarts Castle</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/10.jpg" rel="photos"><img
								src="images/photos/10-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Italian Shade</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/11.jpg" rel="photos"><img
								src="images/photos/11-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Newquay Beach</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/12.jpg" rel="photos"><img
								src="images/photos/12-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Universal Studios</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/13.jpg" rel="photos"><img
								src="images/photos/13-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Worms Head, Wales</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/14.jpg" rel="photos"><img
								src="images/photos/14-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Heavy Rain</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/15.jpg" rel="photos"><img
								src="images/photos/15-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Rock Pool</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/16.jpg" rel="photos"><img
								src="images/photos/16-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Mountain Top</p>
					</li>
					<li>
						<div class="figure zoom">
							<a href="images/photos/17.jpg" rel="photos"><img
								src="images/photos/17-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">Waterfall</p>
					</li>
					<li class="last">
						<div class="figure zoom">
							<a href="images/photos/18.jpg" rel="photos"><img
								src="images/photos/18-small.jpg" alt="" /></a>
						</div>
						<p class="figure_caption">High Altitude Lake</p>
					</li>
				</ul>
			</section>
			<section id="contact">
				<div class="section_header">
					<h1>Get in Touch</h1>
				</div>
				<form id="contact_form" action="scripts/contact.php" method="post">
					<p>
						<label for="name" class="field_name">Your Name: </label> <input
							type="text" name="name" id="name" />
					</p>
					<p>
						<label for="email" class="field_name">Your Email: </label> <input
							type="text" name="email" id="email" />
					</p>
					<p>
						<label for="url" class="field_name">Your Website: </label> <input
							type="text" name="url" id="url" />
					</p>
					<p>
						<label for="message" class="field_name">Your Message: </label>
						<textarea cols="20" rows="7" name="message" id="message"></textarea>
					</p>
					<p>
						<input type="submit" name="submit" value="Send Message" />
					</p>
				</form>
                <?php
                    if($_SESSION['contactResult']) {
                        $result = $_SESSION['contactResult'];
                        $text = $_SESSION['contactText'];
                        if($result == 'success') {
                            ?>
                            <div id="contactSuccess">
                            <?php
                            echo $text;
                            ?>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div id="contactFail">
                            <?php
                            echo $text;
                            ?>
                            </div>
                            <?php
                        }
                    }
                    session_unset(); 
                ?>
				<div id="copyright">
					<p>Website created by Andrew Lord</p>
				</div>
			</section>
		</div>
	</div>
</body>
</html>
