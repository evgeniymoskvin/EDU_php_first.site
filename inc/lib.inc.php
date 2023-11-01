<?php
function renderCategories(array $arr){
    for ($i = 0; $i < count($arr); $i++) {
        echo '<a class="dropdown-item" href="#">' . $arr[$i] . '</a>';
    }
}


function renderPublisher(array $arr_pub){
    for ($i = 0; $i < count($arr_pub); $i++) {
        echo ' <li class="list-group-item">
                        <input type="checkbox" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">' . $arr_pub[$i] . '</label>
                    </li>';
    }
}

function renderMenu(array $arr_menu){
    foreach ($arr_menu as $l => $n){
        echo '<li class="nav-item">
            <a class="nav-link" href="../'.$l.'.php">'.$n.'</a>
        </li>';
    }
}