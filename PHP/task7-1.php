<?php
class Person {
    private $id;
    private $name;
    private $age;
    private $gender;

    public function __construct($id, $name, $ager,$gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getId() {
        return $this->id;
    }
}

// インスタンスを作成
$person = new Person("(0001)", 31, "", "佐藤一郎");

// プロパティにアクセスして情報を取得
echo "名前: " . $person->getName() . "\n";
echo "年齢: " . $person->getAge() . "\n";
echo "性別: " . $person->getGender() . "\n";
echo "ID番号: " . $person->getId() . "\n"
?> <br>
<?php
class Perso {
    private $id;
    private $name;
    private $age;
    private $gender;

    public function __construct($id, $name, $ager,$gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getId() {
        return $this->id;
    } 
}

// インスタンスを作成
$person = new Perso("(0002)", 25, "女性", "山田花子");

// プロパティにアクセスして情報を取得
echo "名前: " . $person->getName() . "\n";
echo "年齢: " . $person->getAge() . "\n";
echo "性別: " . $person->getGender() . "\n";
echo "ID番号: " . $person->getId() . "\n"
?> <br>
<?php
class Pers{
    private $id;
    private $name;
    private $age;
    private $gender;

    public function __construct($id, $name, $ager,$gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getId() {
        return $this->id;
    }
}

// インスタンスを作成
$person = new Pers("(0003)", 27, "男性", "鈴木次郎");

// プロパティにアクセスして情報を取得
echo "名前: " . $person->getName() . "\n";
echo "年齢: " . $person->getAge() . "\n";
echo "性別: " . $person->getGender() . "\n";
echo "ID番号: " . $person->getId() . "\n"
?>