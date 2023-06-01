<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            $maand = date('M');
            switch ($maand) {
                case 'Jan':
                    echo "januari";
                    break;
                case 'Feb':
                    echo "februari";
                    break;
                case 'Mar':
                    echo "maart";
                    break;
                case 'Apr':
                    echo "april";
                    break;
                case 'May':
                    echo "mei";
                    break;
                case 'Jun':
                    echo "juni";
                    break;
                case 'Jul':
                    echo "juli";
                    break;
                case 'Aug':
                    echo "augustus";
                    break;
                case 'Sep':
                    echo "septemeber";
                    break;
                case 'Oct':
                    echo "oktober";
                    break;
                case 'Nov':
                    echo "november";
                    break;
                case 'Dec':
                    echo "december";
                    break;
                default:
                    echo "onbekende maand";
            }
        ?>
    </body>
</html>