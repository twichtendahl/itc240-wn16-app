<?php
/*
daily.php

Links to Video Game of the day for each day of the week

*/
?>

<!-- Include configuration -->
<?php include 'includes/config.php';?>
<!-- Page knows THIS_PAGE , and has nav bar array of pages -->

<!-- Links to daily pages goes here -->
<?php

if(isset($_GET)) {
    // Capture Mon thru Sun to later determine featured video game
    $dayOfWeek = $_GET['day'];
} else { //User hasn't clicked a link - today's default will display
    $dayOfWeek = date('D');
}

// Capture year for copyright
$year = date('Y');

// Set game name, game image, game description, image alt text, and style
// depending on the day of the week
function setGameContent($day) {
    
    // Variables to store game information within function scope
    $gameName = '';
    $longGameName = '';
    $shortGameDescription = '';
    $gameDescription = '';
    $figCaption = '';
    
    // Switch statement to set the variables' content.
    switch($day) {
        case 'Mon':
            $gameName = "megaManX";
            $longGameName = "Mega Man X";
            $shortGameDescription = "Mega Man X is a game produced by Capcom for the Super Nintendo Entertainment system, and released in 1993.";
            $gameDescription = "In Mega Man X, the player guides the humanoid robot X through a heroic effort to save the human race from extinction at the hands of the superintelligent robot Sigma. By defeating eight bosses, X acquires new weapons and techniques in preparation for the ultimate confrontation: a fight with Sigma deep within his island base. Early in his quest, X is rescued by his only ally, Zero, who sacrifices himself in the process. Zero's council at death fills X with the necessary resolve to confront Sigma later in the game. Although X's defeat of Sigma constitutes the player's victory, a cryptic message after the credit sequence warns that Sigma will return to menace the world again.";
            $figCaption = "Mega Man X employed advanced movement to tactically evade foes";
            break;
        case 'Tue':
            $gameName = "pokemonReborn";
            $longGameName = "Pokemon Reborn";
            $shortGameDescription = "In Pokemon Reborn, the player explores a vast region with the help of a team of Pokemon.";
            $gameDescription = "First released by independent developer Amethyst, Pokemon Reborn is a highly challenging repurposing of Nintendo's celebrated Pokemon franchise. Rather than exploring a pristine expanse, dotted by picturesque villages, as is typical in officially sanctioned Pokemon games, the player instead negotiates a dystopian landscape. The player summons unique creatures to battle the brainwashed minions of a criminal organization. The complex battle mechanics and interactions contribute to the challenge of this strategy game.";
            $figCaption = "A wealth of sidequests, such as the opportunity to capture the Pokemon Absol pictured here, sets Reborn apart from similar role-playing games";
            break;
        case 'Wed':
            $gameName = "pacMan";
            $longGameName = "Pac-Man";
            $shortGameDescription = "In Pac-Man, the player eats his or her way to victory.";
            $gameDescription = "In this epochal classic, the player eats his or her way to victory, dodging four ghosts in a maze while gorging on pac-dots. Pac-Man clears a level by eating every pellet in the maze, but if he collides with an enemy, the player will lose a life. It could prove difficult to explain to a younger video game enthusiast how such a simple scheme literally spawned the most prolific genre of video games, period, but such is the world we live in.";
            $figCaption = "The starting screen of Pac-Man is instantly recognizable to a majority of adults in Europe, North America, and Japan.";
            break;
        case 'Thu':
            $gameName = "superMarioWorld";
            $longGameName = "Super Mario World";
            $shortGameDescription = "In Super Mario World, Mario and Luigi must save Dinosaur World from Bowser's demonic grasp.";
            $gameDescription = "In Super Mario World, Mario and Luigi team up with Yoshi and acquire new abilities to free Dinosaur World from Bowser. Accepted by critics as one of the best-designed games ever produced, Super Mario World challenges the player with puzzles and conundrums of unusual depth for a platformer. Many iconic traits of the Super Mario series originated in this game, such as Mario's cape.";
            $figCaption = "Super Mario World gameplay from the 'Donut Plains' stage";
            break;
        case 'Fri':
            $gameName = "castlevania";
            $longGameName = "Castlevania: Symphony of the Night";
            $shortGameDescription = "In Castlevania: Symphony of the Night, the player guides hero Alucard through Dracula's castle, vanquishing legions of undead.";
            $gameDescription = "In Castlevania: Symphony of the Night, the player guides hero Alucard through Dracula's castle, shapeshifting into bat, wolf and mist forms in order to access formerly closed off wards of the lair. Aided by vampire-hunter Maria Renard and various beneficial spirits, Alucard progresses through the expansive castle, gaining abilities and items from defeating enemies and visiting the castle librarian. As his skill in magic and weaponry increases, Alucard is set up for a surprise finish.";
            $figCaption = "Castlevania's unique 'Gothic Horror' aesthetic helped make it a cult classic";
            break;
        case 'Sat':
            $gameName = "halo";
            $longGameName = "Halo: Combat Evolved";
            $shortGameDescription = "In Halo: Combat Evolved, the player enters a militarized future in outer space, fighting on behalf of humanity against an alien scourge.";
            $gameDescription = "In Halo: Combat Evolved, the player enters a militarized future in outer space, where human settlements have come under siege by a religiously fanatic allegiance of alien races. The hero Master Chief leads a team of super soldiers in covert and overt combat operations, mastering a bewildering arsenal of alien and human weaponry. His AI comerade Cortana discovers through the course of the game that the massive alien space station Halo must be demolished if the human race is to survive the alien incursion. In particular, a parasitic threat menaces the human mission near the end of the game. Accomplishing this large-scale demolition becomes the objective of this first-person shooter mainstay.";
            $figCaption = "Halo has one of the most vauted multiplayer modes in the history of first person shooters";
            break;
        case 'Sun':
            $gameName = "zelda";
            $longGameName = "The Legend of Zelda: Ocarina of Time";
            $shortGameDescription = "In The Legend of Zelda: Ocarina of Time, Link rescues the beautifully archaic Hyrule from the sorcerer king Ganondorf.";
            $gameDescription = "In The Legend of Zelda: Ocarina of Time, we find the peaceable hero Link stirred to action by disturbances in his native Kokiri forest. On the directives of the sage Deku tree, he meets the young Princess Zelda, who warns him of the evil king Ganondorf, and his plan to take control of Hyrule by accessing a divine artifact known as the Triforce. As a young hero, Link uses his Midaeval weaponry to obtain three sacred stones, which he uses in conjunction with the Ocarina of Time to gain access to the Triforce. Ganondorf deviously uses this event to his advantage, ambushing Link while inadvertantly fracturing the Triforce. Link blacks out, and only awakens to find that he has aged seven years under the care of the sage Rauru. As an adult, Link completes his quest by awakening seven sages whose collective power imprisons the evil king. Zelda: The Ocarina of Time is judged to be the best video game ever produced by an astonishing plurality of spectators.";
            $figCaption = "Exploring the vast Hylian plain contributed to the epic feel of Ocarina of Time";
            break;
        default:
            $gameName = '';
            $longGameName = '';
            $shortGameDescription = '';
            $gameDescription = '';
            $figCaption = '';
    }
    
    // Function will return an array with the variables, each with a different kind of game information
    $gameInfo = array($gameName, $longGameName, $shortGameDescription, $gameDescription, $figCaption);
    return $gameInfo;
}

// Call function in order to set content
$gameInfo = setGameContent($dayOfWeek);

$gameName = $gameInfo[0];
$longGameName = $gameInfo[1];
$shortGameDescription = $gameInfo[2];
$gameDescription = $gameInfo[3];
$figCaption = $gameInfo[4];
    
?>

<?php include 'includes/header.php';?>

<?php

/*
<html>
    <home>
        <title>Video Game of the Day</title>
        
        <link href='css/styles.css' type='text/css' rel='stylesheet'/>
        <!-- Link to Game-specific styles -->
        <link href="css/<?=$gameName?>.css" type="text/css" rel="stylesheet"/>
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    </home>
    
    <body>
*/
?>
    
    <div id='daily_wrapper'>
        <!-- Header with site title and simple nav -->
        <div class='daily_header'>
            <hgroup>
                <h1 id='site_name'>Video Game of the Week</h1>
                <h2 id='site_subtitle'>What will you be playing today?</h2>
            </hgroup>
            
            <!-- Navigation from home to image source/creative content attribution -->
            <nav>
                <ul>
                    <?php
                    //Here we create links to the content for the other days
                    foreach($dailyLinks as $dayCode => $dayName) {
                        //Variable that represents querystring text
                        $querystring = '?day=' . $dayCode;
                        if($dayCode == date('D')) {
                            echo '<li class="active"><a href="' . THIS_PAGE . $querystring . '">' . $dayName . '</a></li>';
                        } else {
                            echo '<li><a href="' . THIS_PAGE . $querystring . '">' . $dayName . '</a></li>';
                        }
                }
                    ?>
                </ul>
            </nav>
        </div>
        
        <!-- Main page content wrapper -->
        <div id='wrapper'>
            <!-- Video game title and image -->
            <div id='title_image'>
                <hgroup>
                    <h1>Today's Game:</h1>
                    <h2><?=$longGameName?></h2>
                </hgroup>
                <figure>
                    <img src="assets/img/<?=$gameName?>.jpg" alt="<?=$longGameName?>" title="<?=$shortGameDescription?>" />
                    <figcaption><?=$figCaption?></figcaption>
                </figure>                
            </div>
            
            <!-- In-depth description of game -->
            <article id='description'>
                <?=$gameDescription?>
            </article>
        </div>
        
        <!-- Footer with copyright, link to content credits -->
        <footer>
            Video Game of the Day &#169; <?=$year?> Travis Wichtendahl.
        </footer>
</div>

<?php include 'includes/footer.php';?>