<?php
$name_error = '';
$phone_error = '';
$notification = '';
$flag = true;

if (isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $phone = htmlentities($_POST['phone']);
    if (empty($name)) {
        $name_error = 'Поле обов\'язкове для заповнення';
        $flag = false;
    }
    elseif (!preg_match('/^(([a-zA-Z-]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє-]{1,30}))$/u', $name)) {
        $name_error = 'Введіть дійсне ім\'я';
        $flag = false;
    }
    if (empty($phone)) {
        $phone_error = 'Поле обов\'язкове для заповнення';
        $flag = false;
    }
    elseif (!preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', $phone)) {
        $phone_error = 'Введіть дійсний номер телефону';
        $flag = false;
    }
    if ($flag) {
        $notification = 'Успішно відправлено!';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Massage Nest</title>
    <link rel="stylesheet" href="./css/sign_up.css">
    <link href="https://fonts.cdnfonts.com/css/helvetica-2" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="brand-logo"></div>
    <div class="brand-title">MASSAGE NEST</div>
    <div class="inputs">
        <form action="" method="POST">
            <?php
            if ($name_error)
                echo "<label class='error'>$name_error</label>";
            else
                echo "<label>Ім'я</label>"
            ?>
            <input type="text" name="name" placeholder="Ім'я"/>
            <?php
            if ($phone_error)
                echo "<label class='error'>$phone_error</label>";
            else
                echo "<label>Номер телефону</label>"
            ?>
            <input type="text" name="phone" placeholder="+38 (___) ___-__-__">
            <button type="submit" name="submit" value="entry">ЗАПИСАТИСЬ</button>
        </form>
    </div>
    <?php
    if ($notification)
        echo "<label class='notification'>$notification<label>";
    ?>
<!--    <div>-->
<!--        --><?php //=print_r($_POST, true);?>
<!--    </div>-->
</div>
</body>
</html>

