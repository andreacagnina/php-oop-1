<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $duration;
    public $main_actors;
    public $director;
    public static $language = 'English';
    public static $distribution = 'Streaming';

    function __construct($title, $genre, $year, $duration, $main_actors, Director $director)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;
        $this->main_actors = $main_actors;
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

    public function setDurationType($duration)
    {
        if ($duration < 40) {
            return $duration += '(Cortometraggio)';
        } else if ($duration > 40 && $duration < 60) {
            return $duration += '(Mediometraggio)';
        } else if ($duration > 90 && $duration < 180) {
            return $duration += '(Lungometraggio)';
        }
    }
}

class Director
{
    public $name;
    public $surname;
    public $date_of_birth;
    public $gender;
    public $nationality;

    function __construct($name, $surname, $date_of_birth, $gender, $nationality)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_of_birth = $date_of_birth;
        $this->gender = $gender;
        $this->nationality = $nationality;
    }
}

$The_avengers = new Movie('The Avengers', 'Action', 2012, 143, 'Robert Downey Jr', new Director('Joss', 'Whedon', '1964/06/23', 'Male', 'American'));
$Avengers_Age_of_Ultron = new Movie('Avengers: Age of Ultron', 'Action', 2015, 141, 'James Spader', new Director('Joss', 'Whedon', '1964/06/23', 'Male', 'American'));
$Avengers_Infinity_War = new Movie('Avengers: Infinity War', 'Action', 2018, 149, 'Chris Hemsworth', new Director('Anthony', 'Russo', '1970/02/03', 'Male', 'American'));
$Avengers_End_Game = new Movie('Avengers: Endgame', 'Action', 2019, 181, 'Josh Brolin', new Director('Joe', 'Russo', '1971/07/18', 'Male', 'American'));

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