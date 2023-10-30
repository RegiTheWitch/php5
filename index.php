<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Печеньки</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?
    class Cookie
    {
        private $type;

        public function setType($type)
        {
            $allowedTypes = ['Имбирное', 'Шоколадное', 'С изюмом'];

            if (in_array($type, $allowedTypes)) {
                $this->type = $type;
            } else {
                $this->type = '<span class="error">Простите, печенья такого вида нет в наличии</span>';
            }
        }

        public function getType()
        {
            return '<p>Печенье: ' . $this->type . '</p>';
        }
    }

    $cookie = new Cookie();

    $cookie->setType('С изюмом');
    echo $cookie->getType();

    $cookie->setType('Овсяное');
    echo $cookie->getType();

    $cookie->setType('Шоколадное');
    echo $cookie->getType();
    ?>
</body>

</html>