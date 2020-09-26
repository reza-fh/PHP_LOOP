<?php

function pertama()
{
  for($f=1; $f<=10; $f++)
  {
      if($f==4)
      {
          echo "";
      }
      elseif($f==5)
      {
          echo "";
      }
      elseif($f==6)
      {
          echo "";
      }
      elseif($f==7)
      {
          echo "";
      }
      else{
          echo $f;
      }
  }
}

pertama();

echo PHP_EOL;

function kedua()
{
    for($w=5; $w>=1; $w--)
    {
        if($w==2)
        {
            echo "*";
        }elseif($w==1)
        {
            echo "*";
        }else
        {
            echo $w;
        }
    }
}

kedua();

echo PHP_EOL;

function ketiga()
{
    for($s=1; $s<=4; $s++)
    {
        if($s %2)
        {
            echo $s."a";
        }
        else
        {
            echo $s."b";
        }
    }
}
ketiga();

echo PHP_EOL;

function keempat()
{
    for($b=1; $b<=7; $b++)
    {
        if($b==4)
        {
            echo "A";
        }
        elseif($b==5)
        {
            echo "A";
        }
        elseif($b==6)
        {
            echo "A";
        }else
        {
            echo $b;
        }
    }
}

keempat();
echo PHP_EOL;

function kelima()
{
    for($e=4; $e>=0; $e--)
    {
        if($e==0)
        {
            echo "A";
        }elseif($e==2)
        {
            echo "A";
        }else
        {
            echo $e;
        }
    }
}

kelima();

echo PHP_EOL;

function keenam()
{
    for($z=0; $z<=4; $z++)
    {
        if($z==0)
        {
            echo "A";
        }
        elseif($z==1)
        {
            echo "A";
        }else
        {
            echo $z;
        }
    }
}

keenam();

echo PHP_EOL;
