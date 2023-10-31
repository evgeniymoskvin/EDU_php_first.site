<?php
define('AUTHOR', 'Alex');
define('YEAR', date('Y'));
define('DBHOST', 'DBHOST_VALUE');
define('DBLOGIN', 'DBLOGIN_VALUE');
define('DBPASS', 'DBPASS_VALUE');
define('DBNAME', 'DBNAME_VALUE');

$firstName = 'firstName_value';
$lastName = 'lastName_value';
$email = 'email_value';
$address = 'address_value';

$successOrder = 'firstName';
$categories = ['Another action', 'Something else here', 'Action', 'Another action', 'Something else here', 'Action', 'Another action', 'Something else here'];
if (empty($categories)){
    echo "Категорий нет";
}

$publisher = ['Первое', 'Второе', 'Третье'];

if (empty($publisher)){
    echo "Издательств нет";
}

$book = ['idbook' => 1, 'title' => 'title_value', 'author' => 'dfgdfg', 'price' => '1200руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to
    additional content.'];

$books = [
    ['idbook' => 1, 'title' => 'title_value', 'author' => 'dfgdfg', 'price' => '1200руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'],
    ['idbook' => 2, 'title' => 'title_value', 'author' => 'sdgfgfg', 'price' => '800руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'],
    ['idbook' => 3, 'title' => 'title_value', 'author' => 'dfgd', 'price' => '2100руб', 'description' => 'TThis is a wider card with supporting text below as a natural lead-in to additional content.'],
    ['idbook' => 4, 'title' => 'title_value', 'author' => 'dfgdfg', 'price' => '1205руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'],
    ['idbook' => 5, 'title' => 'title_value', 'author' => 'sdgfgfg', 'price' => '805руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'],
    ['idbook' => 6, 'title' => 'title_value', 'author' => 'dfgd', 'price' => '2105руб', 'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'],
];

$menu = ['delivery' => 'Доставка', 'contacts' => 'Контакты', 'login' => 'Войти', 'basket' => 'Корзина'];
$page = 'index';

?>
