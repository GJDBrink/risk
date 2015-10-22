<?php
/**
 * Created by PhpStorm.
 * User: Gerhard
 * Date: 17-9-2015
 * Time: 18:48
 */

        ?>
<html>
    <head>
        <title>Risk Game</title>

        <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/css/territories.css') }}" rel="stylesheet" />

        <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

        <script>
            $(document).ready(function(){
                $('#start').click(function(){
                    console.debug('init game');
                    $('#msgCentre').html('Choose a country');
                })

                $('.territory').click(function(){
                   console.debug('choose territory');
                    console.debug($(this).attr('id'));

                    $(this).addClass('territory-selected');
                });
            });
        </script>

    </head>

    <body>




    <div class="container">

        <div class="row">

            <input type="text" name="players" id="players" class="form-control" style="width: 40px;">

            <button type="button" class="btn btn-info" id="start">Start the game</button>

        </div>

        <div id="msgCentre">

        </div>

        <div style="clear: both;"></div>

        <div class="west">

            <div class="north-america">

                <div class="territory alaska" id="alaska">
                    Alaska
                </div>

                <div class="territory north-west" id="north-west">
                    North-West Territories
                </div>

                <div class="territory greenland" id="greenland">
                    Greenland
                </div>

                <div class="territory alberta" id="alberta">
                    Alberta
                </div>

                <div class="territory ontario" id="ontario">
                    Ontario
                </div>

                <div class="territory quebec" id="quebec">
                    Quebec
                </div>

                <div class="territory western-us" id="western-us">
                    Western United States
                </div>

                <div class="territory eastern-us" id="eastern-us">
                    Eastern United Staetes
                </div>

                <div class="clear"></div>

                <div class="territory central-america" id="central-america">
                    Central America
                </div>

            </div>

            <div class="clear"></div>

            <div class="south-america">

                <div class="territory venezuela" id="venezuela">
                    Venezuela
                </div>

                <div class="territory peru" id="peru">
                    Peru
                </div>

                <div class="territory brazil" id="brazil">
                    Brazil
                </div>

                <div class="territory argentina" id="argentina">
                    Argentina
                </div>

            </div>
        </div>

        <div class="middle">

            <div class="europe">
                <div class="territory iceland" id="iceland">
                    Iceland
                </div>

                <div class="territory scandinavia" id="scandinavia">
                    Scandinavia
                </div>

                <div class="territory great-britain" id="great-britain">
                    Great Britain
                </div>

                <div class="territory north-europe" id="north-europe">
                    North Europe
                </div>

                <div class="territory east-europe" id="east-europe">
                    Eastern Euope
                </div>

                <div class="territory west-europe" id="west-europe">
                    West Europe
                </div>

                <div class="territory south-europe" id="south-europa">
                    South Europe
                </div>



            </div>

        </div>

    </div>

    </body>

</html>
