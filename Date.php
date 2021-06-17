<?php


class Date
{
    public $date;

    public function __construct($date = null)
    {
        // если дата не передана - пусть берется текущая
        if (!empty($date)) {
            $this->date = date('Y-m-d', strtotime($date));
        } else {
            $this->date = date('Y-m-d', time());
        }
    }

    public function getDay()
    {
        // возвращает день
        return date('d', strtotime($this->date));
    }

    public function getMonth($lang = null)
    {
        $monthsRu = [1=> "Январь" , "Февраль" , "Март" , "Апрель" , "Май" , "Июнь" , "Июль" , "Август" , "Сентябрь" , "Октябрь" , "Ноябрь" , "Декабрь"];
        $monthsEng = [1=> "January",   "February",  "March",     "April",    "May",       "June", "August",    "September", "October",   "November",  "December"];
        $dateDay = date('n', strtotime($this->date));
        if (empty($lang)) {
            return $monthsRu[$dateDay];
        }

        if ($lang == 'en') {
            return $monthsEng[$dateDay];
        }
        if ($lang == 'ru') {
            return $monthsRu[$dateDay];
        }
        // возвращает месяц

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    }

    public function getYear()
    {
        return date('Y', strtotime($this->date));
        // возвращает год
    }

    public function getWeekDay($lang = null)
    {
        $weekEng = [1=>"Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
        $weekRu = [1=>"Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];
        $dateDay = date('w', strtotime($this->date));

        if (empty($lang)) {
            return $weekRu[$dateDay];
        }

        if ($lang == 'en') {
            return $weekEng[$dateDay];
        }
        if ($lang == 'ru') {
            return $weekRu[$dateDay];
        }

        // возвращает день недели

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    }

    public function addDay($value)
    {
        $dateDay = date_create($this->date);
        date_modify($dateDay, "+$value days");
        return date_format($dateDay, 'Y-m-d');
        // добавляет значение $value к дню
    }

    public function subDay($value)
    {
        // отнимает значение $value от дня
        $dateDay = date_create($this->date);
        date_modify($dateDay, "-$value days");
        return date_format($dateDay, 'Y-m-d');
    }

    public function addMonth($value)
    {
        $dateDay = date_create($this->date);
        date_modify($dateDay, "+$value month");
        return date_format($dateDay, 'Y-m-d');
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        // добавляет значение $value к году
    }

    public function subYear($value)
    {
        // отнимает значение $value от года
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
        return date("$format", strtotime($this->date));
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
        return $this->date;
    }
}