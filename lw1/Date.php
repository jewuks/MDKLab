<?php

class Date
{
    public function __construct($day,$month,$year)
    {
       $this->day = $day;
       $this->month = $month;
       $this->year = $year;
        print($this->day);
        print(".");
        print($this->month);
        print(".");
        print($this->year);
        print("\n");
    }

    public function diffDay(Date $dates): int
    {
        $i = 0;
        if($this->day < $dates->day || $this->month < $dates->month || $this->year < $dates->year)
        {
         $fd = $this->day;
         $fm = $this->month;
         $fy = $this->year;
         $td = $dates->day;
         $tm = $dates->month;
         $ty = $dates->year;
         do
         {
             $fd += 1;
             $i += 1;
             echo $i;
             if($fd === 31)
             {
                 $fd -= 31;
                 $fm += 1;
                 if($fm === 12)
                 {
                     $fm -= 12;
                     $fy += 1;
                 }
             }
         }while($fd !== $td || $fm !== $tm || $fy !== $ty);
        }
        if($this->day > $dates->day || $this->month > $dates->month || $this->year > $dates->year)
        {
            $fd = $this->day;
            $fm = $this->month;
            $fy = $this->year;
            $td = $dates->day;
            $tm = $dates->month;
            $ty = $dates->year;
            do
            {
                $fd -= 1;
                $i += 1;

                if($fd === 0)
                {
                    $fd += 31;
                    $fm -= 1;
                    if($fm === 0)
                    {
                        $fm += 12;
                        $fy -= 1;
                    }
                }
            }while($fd !== $td || $fm !== $tm || $fy !== $ty);
        }
        print("Разница дат ". $i ." Дней". "\n");
        return $i;
    }
    public function minusDay($int){
        for($i = 0;$i < $int; $i++)
        {
            $this->day -= 1;
            if($this->day < 1){
                $this->day = 31;
                $this->month -= 1;
                if($this->month < 1){
                    $this->month = 12;
                    $this->year -= 1;
                }
            }
        }
        print("Новая дата после вычитания: ");
        print($this->day);
        print(".");
        print($this->month);
        print(".");
        print($this->year);
        print("\n");
        return $this->day;
    }
    public function format(string $type): void
    {
        if($type == 'en'){
            print($this->year);
            print("-");
            print($this->month);
            print("-");
            print($this->day);
            print("\n");
        }
       if($type == 'ru'){
           print($this->day);
           print(".");
           print($this->month);
           print(".");
           print($this->year);
           print("\n");
       }
    }
}

?>
