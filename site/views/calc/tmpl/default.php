<?php
/**
 * @file        default.php
 * @description
 *
 * PHP Version  5.3.13
 *
 * @package 
 * @category
 * @plugin URI
 * @copyright   2013, Vadim Pshentsov. All Rights Reserved.
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author      Vadim Pshentsov <pshentsoff@gmail.com> 
 * @link        http://pshentsoff.ru Author's homepage
 * @link        http://blog.pshentsoff.ru Author's blog
 *
 * @created     01.11.13
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<div id="intercalc-main">

    <div class="intercalc-property"  id="house-kind-block">
        <div class="intercalc-left" style="display: block;">
            <h3>Вам для дома или квартиры?</h3>
            <label title="дом" >
                <input name="M" value="AL" type="radio">
            </label>
            <label title="квартира">
                <input name="M" value="BM" type="radio">
            </label>
        </div>
        <div class="intercalc-right">

        </div>
    </div>

    <div class="intercalc-property" id="room-space-block">
        <div class="intercalc-left">
            <h3>Площадь помещения</h3>
            <label title="Пожалуйста, укажите площадь помещения">
                <input type="text" name="room_space" />
            </label>
        </div>
    </div>

    <div class="intercalc-property" id="room-height-block">
        <div class="intercalc-left">
            <h3>Высота потолка</h3>
            <label title="Пожалуйста, укажите высоту потолка">
                <input type="text" name="room_height" />
            </label>
        </div>
    </div>

    <div class="intercalc-property" id="windowsill-height-block">
        <div class="intercalc-left">
            <h3>Высота подоконника</h3>
            <label title="Пожалуйста, укажите высоту подоконника">
                <select name="windowsill_height">
                    <option value="less700mm">меньше 700мм</option>
                    <option value="more700mm">больше 700 мм</option>
                </select>
            </label>
        </div>
    </div>

    <div class="intercalc-property" id="options-block">
        <div class="intercalc-left" style="display: block;">
            <h3>Особенности</h3>
            <label title="В комнате 2 окна">
                <input name="two_windows" type="checkbox">
            </label>
            <label title="Угловая комната">
                <input name="corner_room" type="checkbox">
            </label>
        </div>
    </div>

    <div class="intercalc-property">
        <div class="intercalc-left">
            <button id="calculate" value="">Рассчитать</button>
        </div>
    </div>

</div>

