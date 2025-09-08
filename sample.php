<?php
// Class 1: Phone
class Phone {
    private $brand;
    private $model;

    public function setBrand($b) {
        $this->brand = $b;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setModel($m) {
        $this->model = $m;
    }

    public function getModel() {
        return $this->model;
    }
}

// Class 2: Movie
class Movie {
    private $title;
    private $genre;

    public function setTitle($t) {
        $this->title = $t;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setGenre($g) {
        $this->genre = $g;
    }

    public function getGenre() {
        return $this->genre;
    }
}

// Class 3: House
class House {
    private $color;
    private $rooms;

    public function setColor($c) {
        $this->color = $c;
    }

    public function getColor() {
        return $this->color;
    }

    public function setRooms($r) {
        $this->rooms = $r;
    }

    public function getRooms() {
        return $this->rooms;
    }
}

// Class 4: Game
class Game {
    private $name;
    private $platform;

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }

    public function setPlatform($p) {
        $this->platform = $p;
    }

    public function getPlatform() {
        return $this->platform;
    }
}

// Class 5: Food
class Food {
    private $type;
    private $taste;

    public function setType($t) {
        $this->type = $t;
    }

    public function getType() {
        return $this->type;
    }

    public function setTaste($ta) {
        $this->taste = $ta;
    }

    public function getTaste() {
        return $this->taste;
    }
}

// Example usage
$phone1 = new Phone();
$phone1->setBrand("Samsung");
$phone1->setModel("Galaxy S22");
echo "Phone: " . $phone1->getBrand() . " " . $phone1->getModel() . "<br>";

$movie1 = new Movie();
$movie1->setTitle("Inception");
$movie1->setGenre("Sci-Fi");
echo "Movie: " . $movie1->getTitle() . " - Genre: " . $movie1->getGenre() . "<br>";

$house1 = new House();
$house1->setColor("Blue");
$house1->setRooms(3);
echo "House Color: " . $house1->getColor() . " - Rooms: " . $house1->getRooms() . "<br>";

$game1 = new Game();
$game1->setName("Minecraft");
$game1->setPlatform("PC");
echo "Game: " . $game1->getName() . " on " . $game1->getPlatform() . "<br>";

$food1 = new Food();
$food1->setType("Pizza");
$food1->setTaste("Delicious");
echo "Food: " . $food1->getType() . " - Taste: " . $food1->getTaste() . "<br>";
?>
