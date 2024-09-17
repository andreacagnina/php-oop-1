<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $duration;
    public $main_actor;
    public $director;
    public static $language = 'English';
    public static $distribution = 'Streaming';

    function __construct($title, $genre, $year, $duration, $main_actor, Director $director)
    {
        $this->title = $title;
        $this->genre = $genre;
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
            return $typeOfDuration = '(Cortometraggio)';
        } else if ($typeOfDuration > 40 && $typeOfDuration < 60) {
            return $typeOfDuration = '(Mediometraggio)';
        } else if ($typeOfDuration > 90 && $typeOfDuration < 180) {
            return $typeOfDuration = '(Lungometraggio)';
        }
    }
    public function getFullName()
    {
        return $this->director->name . " " . $this->director->surname . " " . "(" . "nato il" . " " . $this->director->date_of_birth . ")";
    }
    public function getAge()
    {
        $today = new DateTime();
        $age = $this->director->date_of_birth->diff($today)->y;
        return $age;
    }
}

class Director
{
    public $name;
    public $surname;
    public $date_of_birth;
    public $gender;
    public $nationality;

    function __construct($name, $surname, $date_of_birth)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_of_birth = $date_of_birth;
    }
}

$The_avengers = new Movie('The Avengers', 'Action', 2012, 10, 'Robert Downey Jr', new Director('Joss', 'Whedon', '1964/06/23'));
$Avengers_Age_of_Ultron = new Movie('Avengers: Age of Ultron', 'Action', 2015, 141, 'James Spader', new Director('Joss', 'Whedon', '1964/06/23'));
$Avengers_Infinity_War = new Movie('Avengers: Infinity War', 'Action', 2018, 149, 'Chris Hemsworth', new Director('Anthony', 'Russo', '1970/02/03'));
$Avengers_End_Game = new Movie('Avengers: Endgame', 'Action', 2019, 181, 'Josh Brolin', new Director('Joe', 'Russo', '1971/07/18'));

$The_avengers->getStreamingMessage();
$The_avengers->getLanguage();
$The_avengers->getFullName();
$The_avengers->setDurationType('duration');


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
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <?php { ?>
                        <ul>
                            <li>
                                <h2>
                                    <?php echo $The_avengers->title ?>
                                </h2>
                            </li>
                            <li>
                                <h3>
                                    Genere: <?php echo $The_avengers->genre ?>
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
                                    Regista: <?php echo $The_avengers->getFullName() ?>
                                </h3>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietàBonus 1:
    Modificare la classe Movie in modo che accetti piú di un genere.Bonus 2:
    Creare un layout completo per stampare a schermo una lista di movies.
    Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
    - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
    - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
    - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

</body>

</html>