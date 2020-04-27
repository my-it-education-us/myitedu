<?php
namespace Factory;
require_once 'toolbox.php';

class Electrician{
    use toolbox;
}


class Plumber{
    use toolbox;
}

class Welder{
    use toolbox;
}


$plumber = new Plumber();
echo "A Plumber is using:". $plumber->screwdriver();
echo "<hr>";

$electrician = new Plumber();
echo "A Electrician is using:". $electrician->nailgun();
echo "<hr>";