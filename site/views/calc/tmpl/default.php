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

<div class="intercalc-main">
    <div id="intercalc_menu">
        <div class="selected" return="0">1. Дом | квартира</div>
        <div return="1">2. Тип дома</div>
        <div return="2">3. Размеры комнаты</div>
        <div return="3" style="border:0px; line-height:62px; font-size:18pt;">*</div>
    </div>
    <div style="display: block;" id="intercalc-right">
        <h3>Вам для дома или квартиры?</h3>
        <label title="дом" class="radiobox1" style="margin:50px 0px 0px 140px;">
            <input name="M" value="AL" type="radio">
            <span></span>
        </label>
        <label title="квартира" class="radiobox1" style="margin:50px 0px 0px 320px;">
            <input name="M" value="BM" type="radio">
            <span></span>
        </label>
        <img src="page1.png">
    </div>

    <div style="margin-left: 0px; display: block;" id="intercalc-left">
        <div>
            <p>
                Алюминиевый<br>радиатор
                <h2>AL-350</h2>(5 секций)
            </p>
        </div>
        <img src="AL-350.png">
    </div>

</div>
