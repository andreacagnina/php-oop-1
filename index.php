<?php
class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $main_actors;
    public $director;
    public $language;
    public static $distribution = 'Streaming';

    function __construct($title, $genre, $duration, $main_actors, Director $director, $language)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->main_actors = $main_actors;
        $this->director = $director;
        $this->language = $language;
    }
}

class Director
{
    public $name;
    public $surname;
    public $date_of_birth;
    public $nationality;

    function __construct($name, $surname, $date_of_birth, $nationality)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_of_birth = $date_of_birth;
        $this->nationality = $nationality;
    }
}

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