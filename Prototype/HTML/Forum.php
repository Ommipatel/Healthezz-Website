<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/Forum.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    
    <div class="navbar">
        <a href="Homepage.html"><img src="../logo.png" alt="Logo"></a>
        <a href="Workout.html"><span>Workouts</span></a>
        <a href="Dietary.php"><span>Dietary</span></a>
        <a href="BMICalc.html"><span>BMI</span></a>
        <a href="Forum.php"><span>Forum</span></a>
        <a href="Create_Acc.php"><img src="../user.png" alt="Logo"></a>
    </div>

<div class="forum-very-big-container">
<div class="forum-big-container">

    <div class="forum-bar">
        <!--Header of Webpage-->
        <div class="forum-header">
        <h1>Healthezz Forums</h1>
        </div>

        <!--Button takes you to new webpage to create new post-->
        <a href="Create_Post.php">
            <button type="button" class="newPost-button">Create New Post</button>
        </a>

        <div class="form-layout">
        <form class="forum-form">
        <select name="Sort_by">
            <option value="Hot">Hot</option>
            <option value="Newest">Newest</option>
            <option value="Oldest">Oldest</option>
        </select>

        <input type="text" placeholder="Search..">

        <button type="submit">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>


<div class="forum-post-very-big-container">
<div class="forum-post-big-container">
    <div class="forum-posts">
        <div class="post1">
            <div class="post-title">
                </p>How do I incorporate Cardio?</p>
            </div>
            <div class="post-content">
                <p>I need some advice about cutting property as I feel I might be doing something wrong. My TDEE for a single day is around 2100 calories. I’ve started cutting by about 500 calories as I’ve noticed good muscle growth and I’m focusing on losing the fat now. I’m at around 22% body fat. I also want to incorporate cardio after lifting weights which I’ve always hated and never really stuck to. I’ve avoided cardio for a few months straight and want to give it another go.</p>
                <p>The problem is I’m usually too exhausted after the weight lifting to even climb on a treadmill. On a usual day for example, pull day I’m doing 4 drop sets of lat rows, 3 sets of pulldowns, 3 sets of MTS pulldowns, 4 sets of wide grip rows, 3 sets of shrugs, 4 drop sets of preacher curls and 4 sets of hammer curls with around 2 mins rest between each set. I usually leave the gym after 1 hour 15 mins. How do I incorporate cardio? Am I over training and should lower the sets? Do people change their workouts while restricting calories and adding cardio? Any help is appreciated.</p>
            </div>
            <div class="post-author">
                </p>Posted by: Aisha</p>
            </div>
            <div class="like-button">
                <button type="button" id="like-button">
                <img src="../heart.png" alt="HeartLike" id="heart" width="20px" height="20px">
                <span id="counter" class="counter">10</span>
                </button>

                <button type="button" id="comment-button">
                <img src="../comment.png" alt="Comment" id="comment" width="20px" height="20px">
                <span id="counter" class="counter">6</span>
                </button>
            </div>

        </div>
    </div>
</div>
</div>

<div class="forum-post-very-big-container">
<div class="forum-post-big-container">
    <div class="forum-posts">
        <div class="post2">
            <div class="post-title">
                <p>Feeling nauseous before my muscles feel very tired. Need help!</p>
            </div>
            <div class="post-content">
                <p>Hey guys. I always hear "train until failure" or something like that but I can never reach that point. Before my muscles get super tired I feel like throwing up and that is where I stop. Do you have any tips for this?</p>
            </div>
            <div class="post-author">
                <p>Posted by: Liam</p>
            </div>
            <div class="like-button">
                <button type="button" id="like-button">
                <img src="../heart.png" alt="HeartLike" id="heart" width="20px" height="20px">
                <span id="counter" class="counter">5</span>
                </button>

                <button type="button" id="comment-button">
                <img src="../comment.png" alt="Comment" id="comment" width="20px" height="20px">
                <span id="counter" class="counter">4</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="forum-post-very-big-container">
<div class="forum-post-big-container">
    <div class="forum-posts">
        <div class="post3">
            <div class="post-title">
                <p>Looking for Advice!</p>
            </div>
            <div class="post-content">
                <p>Guys I need advice! I've been cutting for 6 months, I've lost so far 25lb but have continually gained strength. As of recently my squat strength has decreased dramatically, but my isolation exercises have improved. Leg extensions, leg curls, hip thrust, all have gone up in strength. I'm still at 25bmi so I still have a a lot of weight to lose. Should I make an adjustment or just keep going. Also it seems that I have platued at 190 and have been stuck here for the past few weeks</p>
            </div>
            <div class="post-author">
                </p>Posted by: Sophia</p>
            </div>
            <div class="like-button">
                <button type="button" id="like-button">
                <img src="../heart.png" alt="HeartLike" id="heart" width="20px" height="20px">
                <span id="counter" class="counter">2</span>
                </button>

                <button type="button" id="comment-button">
                <img src="../comment.png" alt="Comment" id="comment" width="20px" height="20px">
                <span id="counter" class="counter">1</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>


</div>

    <div class="footer">
        <a href="Legal.html">Legal Compliance</a>
        <a href="AboutUs.html">About Us</a>
        <a href="TermsAndConditions.html">Terms & Conditions</a>
        <p>&copy; 2024 Healthezz | All Rights Reserved</p>
</div>
    
<script src="Forum.js"></script>
</body>
</html>