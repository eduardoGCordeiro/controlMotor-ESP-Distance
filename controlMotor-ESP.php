<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 24/03/2019
 * Time: 21:49
 */

$port = 'COM5';

        function positive($distance)
        {
            global $port;
            $cmd = 'powershell.exe $port= new-Object System.IO.Ports.SerialPort '.$port.',9600,None,8,one; $port.open(); $port.WriteLine(\'x'.$distance.'\'); $port.Close()';
            exec($cmd);
        }

        function moveOrigin()
        {
            global $port;
            $cmd = 'powershell.exe $port= new-Object System.IO.Ports.SerialPort '.$port.',9600,None,8,one; $port.open(); $port.WriteLine(\'h\'); $port.Close()';
            exec($cmd);
        }

        function calibrate()
        {
            global $port;
            $cmd = 'powershell.exe $port= new-Object System.IO.Ports.SerialPort '.$port.',9600,None,8,one; $port.open(); $port.WriteLine(\'c\'); $port.Close()';
            exec($cmd);
        }

        function angle($angle)
        {
            global $port;
            $cmd = 'powershell.exe $port= new-Object System.IO.Ports.SerialPort '.$port.',9600,None,8,one; $port.open(); $port.WriteLine(\'a'.$angle.'\'); $port.Close()';
            exec($cmd);
        }

        switch (explode('.', $_GET['move'])[0])
        {
            case 'd':
                $distance = explode('.', $_GET['move'])[1];
                positive($distance);
                break;

            case 'reset':
                moveOrigin();
                break;

            case 'calibrate':
                calibrate();
                break;

            case 'a':
                $angle = explode('.', $_GET['move'])[1];
                angle($angle);
                break;
        }

?>