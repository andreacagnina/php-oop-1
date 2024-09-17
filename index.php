<?php
class Movie
{
    public $title;
    public $genres;
    public $year;
    public $duration;
    public $main_actor;
    public $director;
    public static $language = 'English';
    public static $distribution = 'Streaming';

    function __construct($title, array $genres, $year, $duration, $main_actor, Director $director)
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
        $this->duration = $duration;
        $this->main_actor = $main_actor;
        $this->director = $director;
    }

    public function getStreamingMessage()
    {
        return self::$distribution;
    }

    public function getLanguage()
    {
        return self::$language;
    }

    public function setDurationType($typeOfDuration)
    {
        if ($typeOfDuration < 40) {
            return $typeOfDuration = '(Cortometraggio FALSO)';
        } else if ($typeOfDuration > 40 && $typeOfDuration < 60) {
            return $typeOfDuration = '(Mediometraggio)';
        } else if ($typeOfDuration > 90 && $typeOfDuration < 180) {
            return $typeOfDuration = '(Lungometraggio)';
        } else {
            return $typeOfDuration = '(Epico)';
        }
    }
    public function getAge()
    {
        $today = new DateTime();
        $age = $this->director->date_of_birth->diff($today)->y;
        return " " . "(" . $age . "anni" . ")";
    }
    public function getFullName()
    {
        return $this->director->name . " " . $this->director->surname;
    }
}

class Director
{
    public $name;
    public $surname;
    public $date_of_birth;

    function __construct($name, $surname, $date_of_birth)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_of_birth = $date_of_birth;
    }
}

$The_avengers = new Movie('The Avengers', ['Action', 'Adventure', 'Science Fiction'], 2012, 10, 'Robert Downey Jr', new Director('Joss', 'Whedon', new DateTime('1964-06-23')));
$Avengers_Age_of_Ultron = new Movie('Avengers: Age of Ultron', ['Action', 'Adventure', 'Science Fiction'], 2015, 141, 'James Spader', new Director('Joss', 'Whedon', new DateTime('1964-06-23')));
$Avengers_Infinity_War = new Movie('Avengers: Infinity War', ['Action', 'Adventure', 'Science Fiction'], 2018, 149, 'Chris Hemsworth', new Director('Anthony', 'Russo', new DateTime('1970-02-03')));
$Avengers_End_Game = new Movie('Avengers: Endgame', ['Action', 'Adventure', 'Science Fiction'], 2019, 181, 'Josh Brolin', new Director('Joe', 'Russo', new DateTime('1971-07-18')));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP</title>
</head>

<body>
    <div class="container my-5 text-center">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <?php { ?>
                        <ul class="list-unstyled py-3">
                            <li>
                                <h2>
                                    <?php echo $The_avengers->title ?>
                                </h2>
                            </li>
                            <li>
                                <h3>
                                    Genere: <?php foreach ($The_avengers->genres as $genre) { ?>
                                        <?php echo $genre; ?> ,
                                    <?php } ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Anno di Uscita: <?php echo $The_avengers->year ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Titolo: <?php echo $The_avengers->duration ?> minuti <?php echo $The_avengers->setDurationType($The_avengers->duration) ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Lingua Originale: <?php echo $The_avengers->getLanguage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Disponibile in: <?php echo $The_avengers->getStreamingMessage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Attore principale: <?php echo $The_avengers->main_actor ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Regista: <?php echo $The_avengers->getFullName(), $The_avengers->getAge() ?>
                                </h3>
                            </li>
                        </ul>
                        <HR>
                        </HR>
                        <ul class="list-unstyled py-3">
                            <li>
                                <h2>
                                    <?php echo $Avengers_Age_of_Ultron->title ?>
                                </h2>
                            </li>
                            <li>
                                <h3>
                                    Genere: <?php foreach ($The_avengers->genres as $genre) { ?>
                                        <?php echo $genre; ?> ,
                                    <?php } ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Anno di Uscita: <?php echo $Avengers_Age_of_Ultron->year ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Titolo: <?php echo $Avengers_Age_of_Ultron->duration ?> minuti <?php echo $Avengers_Age_of_Ultron->setDurationType($Avengers_Age_of_Ultron->duration) ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Lingua Originale: <?php echo $Avengers_Age_of_Ultron->getLanguage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Disponibile in: <?php echo $Avengers_Age_of_Ultron->getStreamingMessage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Attore principale: <?php echo $Avengers_Age_of_Ultron->main_actor ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Regista: <?php echo $Avengers_Age_of_Ultron->getFullName(), $Avengers_Age_of_Ultron->getAge() ?>
                                </h3>
                            </li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled py-3">
                            <li>
                                <h2>
                                    <?php echo $Avengers_Infinity_War->title ?>
                                </h2>
                            </li>
                            <li>
                                <h3>
                                    Genere: <?php foreach ($The_avengers->genres as $genre) { ?>
                                        <?php echo $genre; ?> ,
                                    <?php } ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Anno di Uscita: <?php echo $Avengers_Infinity_War->year ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Titolo: <?php echo $Avengers_Infinity_War->duration ?> minuti <?php echo $Avengers_Infinity_War->setDurationType($Avengers_Infinity_War->duration) ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Lingua Originale: <?php echo $Avengers_Infinity_War->getLanguage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Disponibile in: <?php echo $Avengers_Infinity_War->getStreamingMessage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Attore principale: <?php echo $Avengers_Infinity_War->main_actor ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Regista: <?php echo $Avengers_Infinity_War->getFullName(), $Avengers_Infinity_War->getAge() ?>
                                </h3>
                            </li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled py-3">
                            <li>
                                <h2>
                                    <?php echo $Avengers_End_Game->title ?>
                                </h2>
                            </li>
                            <li>
                                <h3>
                                    Genere: <?php foreach ($The_avengers->genres as $genre) { ?>
                                        <?php echo $genre; ?> ,
                                    <?php } ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Anno di Uscita: <?php echo $Avengers_End_Game->year ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Titolo: <?php echo $Avengers_End_Game->duration ?> minuti <?php echo $Avengers_End_Game->setDurationType($Avengers_End_Game->duration) ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Lingua Originale: <?php echo $Avengers_End_Game->getLanguage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Disponibile in: <?php echo $Avengers_End_Game->getStreamingMessage() ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Attore principale: <?php echo $Avengers_End_Game->main_actor ?>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    Regista: <?php echo $Avengers_End_Game->getFullName(), $Avengers_End_Game->getAge() ?>
                                </h3>
                            </li>
                        </ul>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>