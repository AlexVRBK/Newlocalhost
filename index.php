<?php
trait Helper
{
    private $name;
    private $age;
    private $population;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getPopulation()
    {
        return $this->population;
    }
}
class Country
{
    use Helper;

    public function __construct($name, $age,$population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
}
$country = new Country ('Ужгород', 102, 135000);
echo $country->getName();
echo '<br/>'.$country ->getAge();
echo '<br/>'.$country->getPopulation();
?>