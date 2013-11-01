/**
 * Javascript source file
 * @file        intercalc.js
 * @description com_intercalc script
 *
 * @package     com_intercalc
 * @category    components
 * @copyright   2013, Vadim Pshentsov. All Rights Reserved.
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author      Vadim Pshentsov <pshentsoff@gmail.com>
 * @link        http://pshentsoff.ru Author's homepage
 * @link        http://blog.pshentsoff.ru Author'slog
 *
 * @created     01.11.13
 *
 * NoConflict jQuery mode (use 'jQuery' namespace instead '$')
 *
 */

// radiator params
var radiator = new Object();
radiator = {
    type: "AL",         // Radiator Type "AL" - Aluminium, "BM" - BiMetallic
    model: "ALM300",    // Radiator model
    power: 180        // Radiator power
}

// Room params
var room = new Object();
room = {
    height: 2.5,                        // room height (in meters)
    space: 15,                          // room space (in square meters)
    volume: 0,                          // room volume
    windowsillHeight: "less700mm",      // Windowsill height
    twoWindows: 0,                      // is it two windows in room
    cornerRoom: 0                       // is it corner room
}

// Power to room volume coefficient
var powerCoeff = 25;

// Radiators total power, Watts
var totalPower;

// Radiators power in dependence of models
var radiatorModelsPower = new Object();
radiatorModelsPower = {
    "R300": 119,
    "ALM300": 138,
    "R500": 178,
    "ALM500": 180
}
var radiatorsHeightsMap = new Object();
radiatorsHeightsMap = {
    "AL-less700mm": "ALM300",
    "AL-more700mm": "ALM500",
    "BM-less700mm": "R300",
    "BM-more700mm": "R500"
}



jQuery(document).ready( function() {

    jQuery("#house-kind-block input[value='AL']").click();
    jQuery("#windowsill-height-block select").val("less700mm");
    jQuery("#room-height-block input").val(room.height);
    jQuery("#room-space-block input").val(room.space);
    jQuery("input[name='two_windows']").click();
    jQuery("input[name='corner_room']").click();

    jQuery("#calculate").click(function() {
        room.volume = room.height * room.space;
        totalPower = room.volume/powerCoeff*1000; // kWatt -> Watt

        radiator.model = radiatorsHeightsMap[radiator.type+"-"+room.windowsillHeight];
        radiator.power = radiatorModelsPower[radiator.model];
        sectionsCount = totalPower/radiator.power;

        optionsCoeff = 1;
        if(room.height > 3) optionsCoeff += 0.1;
        if(room.twoWindows == 1) optionsCoeff += 0.1;
        if(room.cornerRoom == 1) optionsCoeff += 0.1;
        sectionsCount *= optionsCoeff;
        sectionsCountClean = sectionsCount; //@todo debug checks only
        sectionsCount = ((sectionsCount - Math.floor(sectionsCount)) <= 0.3) ? Math.floor(sectionsCount) : Math.ceil(sectionsCount);

        html = "<div class='interalc-property'><div class='intercalc-left'>";
        html += "<h3>(Debug) Результаты расчетов</h3>";
        html += "Объем помещения = "+room.volume+" м3<br />";
        html += "Выбран радиатор - <strong>"+radiator.model+"</strong><br />";
        html += "Мощностью = "+radiator.power+" Вт<br />";
        html += "Общая можность = "+totalPower+" кВт<br />";
        html += "Высота потолков -";
        html += (room.height > 3) ? " больше " : " меньше ";
        html += "трех метров<br />";
        if(room.twoWindows || room.cornerRoom) {
            html += "Комната ";
            if(room.cornerRoom) html += "угловая ";
            if(room.twoWindows) html += "с двумя окнами";
            html += "<br />";
        }
        html += "---------------------------<br />";
        html += "Кол-во секций (расчетное) = "+sectionsCountClean+" шт<br />";
        html += "Кол-во секций (округленное) = <strong>"+sectionsCount+" шт</strong><br />";
        html += "</div></div>";

        jQuery("#intercalc-main").append(html);
    });

    jQuery("#house-kind-block input").click(function() {
        radiator.type = String((jQuery(this).attr("value")).toUpperCase());
    });

    jQuery("#room-height-block input").focusout(function() {
        //@todo validation
        room.height = jQuery(this).attr("value");
    });

    jQuery("#room-space-block input").focusout(function() {
        //@todo validation
        room.space = jQuery(this).attr("value");
    });

    jQuery("#windowsill-height-block select").change(function() {
        room.windowsillHeight = jQuery(this).val();
    });

    jQuery("input[name='two_windows']").click(function() {
        room.twoWindows = (jQuery(this).attr("checked") == "checked") ? 1 : 0;
    });

    jQuery("input[name='corner_room']").click(function() {
        room.cornerRoom = (jQuery(this).attr("checked") == "checked") ? 1 : 0;
    });

});

function preloadimg(src) {
    var image = new Image();
    image.src = src;
}
