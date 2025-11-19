<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lyric Remix</title>
    <style>
        body { 
            background-color: #a5a3df;
            text-align: center;
             }

    </style>
</head>
<body>
<?php
$title = "Nothing";
$artist = "Bruno Major";
$mood = "romantic";

$verseCount = 3;
$bridgeCount = "1";

$nouns = ["track suits", "wine", "phones", "shoes", "Nintendo", "TV", "people", "time", "Notebook", "rain", "house", "stars", "roof", "apartment", "heels", "wheel", "floor"];
$verbs = ["take off", "turn off", "play", "lose", "watch", "cry", "making out", "painted", "lock", "bite", "want", "end up", "dancing", "drinking", "spins"];
$adjectives = ["red", "grateful", "seventeenth", "stupid", "blue", "nothing", "high", "much", "appeal"];

$totalSections = $verseCount + $bridgeCount;
$meta = "This song has " . $verseCount . " verses and " . ($bridgeCount) . " bridge section.";

$verse1 = [
    ucfirst($nouns[0]) . " and red " . $nouns[1] . ", movies for two",
    "We'll " . $verbs[0] . " our " . $nouns[2] . " and we'll " . $verbs[1] . " our " . $nouns[3],
    "We'll " . $verbs[2] . " " . $nouns[4] . " though I always " . $verbs[3],
    "'Cause you " . $verbs[4] . " the " . $nouns[5] . " while I'm watching you",
    "There's not many " . $nouns[6] . " I'd honestly say",
    "I don't mind losing to",
    "But there's " . $adjectives[5] . " like doing " . $adjectives[5] . " with you"
];

$verse2 = [
    "Dumb conversation, we lose track of " . $nouns[7],
    "Have I told you lately I'm " . $adjectives[1] . " you're mine?",
    "We'll watch The " . $nouns[8] . " for the " . $adjectives[2] . " time",
    "I'll say 'It's " . $adjectives[3] . ",' then you'll catch me " . $verbs[5],
    "We're not " . $verbs[6] . " on a boat in the " . $nouns[9],
    "Or in a " . $nouns[10] . " I " . $verbs[7] . " " . $adjectives[4],
    "But there's " . $adjectives[5] . " like doing " . $adjectives[5] . " with you"
];

$bridge = [
    "So shut all the windows, " . $verbs[8] . " all the doors",
    "We're not looking for no one, don't need nothing more",
    "You'll " . $verbs[9] . " my lip and I'll " . $verbs[10] . " you more",
    "Until we " . $verbs[11] . " in a heap on the " . $nouns[16],
    "(Mmm, mmm, mmm)"
];

$verse3 = [
    "You could be " . $verbs[12] . " on tabletops, wearing " . $adjectives[6] . " " . $nouns[14],
    ucfirst($verbs[13]) . " until the world " . $verbs[14] . " like a " . $nouns[15],
    "But tonight, your " . $nouns[13] . " has so " . $adjectives[7] . " " . $adjectives[8],
    "Who needs " . $nouns[11] . "? We've got a " . $nouns[12],
    "But there's " . $adjectives[5] . " like doing " . $adjectives[5] . " with you (Mmm)",
    "No, there's " . $adjectives[5] . " like doing " . $adjectives[5] . " with you"
];

echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p class='meta'><strong>Mood:</strong> $mood</p>";
echo "<p class='meta'>$meta</p>";

echo "<div class='verse'><h3>Verse 1</h3>";
foreach ($verse1 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

echo "<div class='verse'><h3>Verse 2</h3>";
foreach ($verse2 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

for ($i = 0; $i < ($bridgeCount); $i++) {
    echo "<div class='bridge'><h3>Bridge</h3>";
    foreach ($bridge as $line) {
        echo "<p>$line</p>";
    }
    echo "</div>";
}

echo "<div class='verse'><h3>Verse 3</h3>";
foreach ($verse3 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";
?>

</body>
</html>