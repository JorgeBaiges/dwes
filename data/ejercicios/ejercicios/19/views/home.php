<?php
    $bgColor = '';

    if($this->color != ''){
        $bgColor = $this->color;
    }

    $strHTML = '<!DOCTYPE html>
        <html lang="en>
            <head>
                <meta charset="utf-8">
                <title>HOME</title>
            </head>
                <body style="background-color: ' . $bgColor . ';">
                    <h2>Home</h2>
                    <p>BIENVENIDO A HOME</p>

                </body>

            </html>';
            print $strHTML;

?>