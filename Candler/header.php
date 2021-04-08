<div class = "header">
    <div class = "content">
        <div class="img_logo"> <img src="Images/harder/logotype.svg"  alt="logo" id="logo_"></div>
        <div class="cont">
            <div class = "info_block">
                <div class = "text1">Гаряча лінія +380636564530</div>
                <div class = "text1">Час роботи з 10:00 до 18:00</div>
                <div class = "text1">candler@gmail.com</div>
            </div>
            <div class="flex-container">
                <div class="logo">
                    <div class="burger_menu">
                        <img src="Images/harder/square.svg" class="burger_menu">
                    </div>
                    <div class = "slogan">
                        <div class="text_sl1"> CANDLER</div>
                        <div class = "text_sl2"> Все для створення свічок</div>
                    </div>
                </div>
                <div class="search">
                    <div class="search_text">Я шукаю...</div>
                    <div class="button">
                        <div class="button_text">
                            Знайти
                        </div>
                    </div>
                </div>
                <div class="tools">
                    <div class="account ">
                        <ul class="first_lvl">
                            <li >
                                <img src="Images/harder/user.svg" class="account_icon" >
                                <?php
                                if ($_COOKIE['user'] == 'online'):?>
                                <ul class="second_lvl">
                                    <li id="welcome">
                                        <?php echo 'Вітаю, ' . htmlspecialchars($_COOKIE["name"]) . '!'?>
                                    </li>
                                    <li class="text_account">
                                        Мій профіль
                                    </li>
                                    <li class="text_account">
                                        Обране
                                    </li>
                                    <li class="text_account">
                                        Кошик
                                    </li>
                                    <li class="text_account">
                                        Повідомлення
                                    </li>
                                    <li class="text_account">
                                        <a>Вийти</a>
                                    </li>
                                </ul>
                                <?php else:?>
                                <ul class="second_lvl">
                                    <li class="text_account">
                                        <div class="wraped">
                                            <button onclick="show('block')" class="enter_bttn">Вхід</button>
                                            <div onclick="show('none')" id="gray"></div>

                                        </div>
                                    </li>
                                </ul>
                                <?php endif;?>
                            </li>
                        </ul>

                    </div>
                    <div class="comprison">
                        <img src="Images/harder/compare.svg" class="copare_icon">
                    </div>
                    <div class="cart">
                        <img src="Images/harder/cart.svg" class="cart_icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="authorisation" >

        <form action="check.php" method="post">
            <img id="close_img" class="close" src="Images/Icon/close.svg" alt=""  onclick="show('none')">
            <div class = "slogan" id="auth_logo">
                <div class="text_sl1"> CANDLER</div>
                <div class = "text_sl2"> Все для створення свічок</div>
            </div>
            <div class="text1" id="text_auth"> Авторизація</div>
            <input type="text" name="nickname" placeholder="Введіть нікнейм" class="field1">
            <input type="password" name="password" placeholder="Введіть пароль" class="field2">
            <button type="submit" name="enter" class="auth_bttn">ВВІЙТИ</button>
        </form>

    </div>
    <script>
        function show(state)
        {
            document.getElementById('authorisation').style.display = state;
            document.getElementById('gray').style.display = state;
        }
    </script>
</div>