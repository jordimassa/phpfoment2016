 <?php
function familyName($fname, $year) {
	$actualyear=date("Y");
    echo "$fname Refsnes. Born in $year is ".($actualyear-$year)." years old<br> ";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>