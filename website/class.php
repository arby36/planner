<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Planner - Classrooms</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="header">
        <div class="tenpad">
            <h1 class="head"><span style="color: white;">2Goo > </span>Planner</h1>
        </div>
    </div>
    <?php 
    $code = $_POST["code"];
    $myfile = fopen("classroom" . $code . ".txt", "w")
    fclose($myfile);
    echo "Classroom " . $code . " was created.";
    ?>
</body>
</html>