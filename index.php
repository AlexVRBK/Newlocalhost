<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    // Создаем метод:
    public function getAge()
    {
        return $this->age;
        {
            if ($this->getAge()>-18)
                return 'true';
            else 'false';
        }
        }

}

$user1 = new Employee;
$user1->name = 'Коля';
$user1->age = 12;
$user1->salary = 1000;

$user2 = new Employee;
$user2->name = 'Вася';
$user2->age = 16;
$user2->salary = 2000;

// Вызовем наш метод:
echo $user1->getAge(); // выведет '!!!'
?>