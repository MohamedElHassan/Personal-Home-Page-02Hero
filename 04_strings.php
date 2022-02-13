<style>
h3 {
    color: #8892BF;
    font-weight: bolder;
    font-size: 25px;
    padding-bottom: 8px;
    border-bottom: 1px solid black;
    /* echo '<br>'; */
}
</style>

<?php
// Create simple string
echo '<h3>Create simple string</h3>';
$name = 'Mohammed';
$string = 'Hello ' .$name. ', How are you';
$string2 = "Hello  $name, How are you";

echo $string; echo '<br>';
echo $string2; echo '<br>';


// String concatenation
echo '<h3>String concatenation</h3>';
echo 'Hello '. 'World' . ' and PHP'; echo '<br>';
// String functions
echo '<h3>String functions</h3>';
$string = "             Hello World               ";
echo $string; echo '<br>';
echo strlen($string); echo '<br>';
echo ucfirst($string); echo '<br>';
echo lcfirst($string); echo '<br>';
echo strtolower($string); echo '<br>';
echo strtoupper($string); echo '<br>';
echo trim($string); echo '<br>';
echo ltrim($string); echo '<br>';
echo rtrim($string); echo '<br>';
echo strrev($string); echo '<br>';




// Multiline text and line breaks
echo '<h3>Multiline text and line breaks</h3>';

$string = 'Hello My name Is Mohammed
I have 20 years Old.
I Love this shit.';
echo nl2br($string);

// Multiline text and reserve html tags

echo '<h3>Multiline text and line breaks</h3>';

$string = 'Hello My name Is <b>Mohammed</b>
I have <b>20</b> years Old.
I Love this shit.';
echo nl2br(htmlentities($string));
echo html_entity_decode('&lt;b&gt;20&lt;/b&gt;');


// https://www.php.net/manual/en/ref.strings.php