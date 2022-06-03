@extends('layouts.master')

@section('calculator_css')
    <link rel="stylesheet" href="/css/calculator.css">
@endsection

@section('content')

<div class="container">
    <div style="margin-bottom: 0cm; text-align: justify;">&nbsp;</div>
    <h1>Калькулятор стоимости натяжного потолка</h1>
</div>

<div class="container">
    <div class="price">
        <div class="title">Рассчет стоимости потолка</div>
        <div id="calculator" class="calculator">
            <table>
                <colgroup>
                    <col width="70%">
                    <col width="30%">
                </colgroup>
                <tbody><tr class="required">
                    <td>Площадь потолка</td>
                    <td><input name="area" type="text" value="10"></td>
                    <td>м<sup>2</sup></td>
                </tr>
                <tr class="required">
                    <td>Фактура</td>
                    <td colspan="2">
                        <select name="texture">
                            <option value="mat">Матовый</option>
                            <option value="glossy">Глянцевый</option>
                            <option value="satin">Сатиновый</option>
                            <option value="fabric">Тканевый</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Общее количество углов</td>
                    <td><input name="corners" type="text" value="4"></td>
                    <td>шт.</td>
                </tr>
                <tr>
                    <td>Установка люстры</td>
                    <td><input name="chandelier-hook" type="text" value=""></td>
                    <td>шт.</td>
                </tr>
                <tr>
                    <td>Установка встраиваемого светильника</td>
                    <td><input name="lamp" type="text" value=""></td>
                    <td>шт.</td>
                </tr>
                <tr>
                    <td>Обход трубы, уходящей в потолок</td>
                    <td><input name="tube" type="text" value=""></td>
                    <td>шт.</td>
                </tr>
                </tbody></table>

            <div class="total">
                Примерная стоимость: <span class="total">2990 руб.</span>
            </div>
        </div>
    </div>
</div>

@endsection

@section('calculator_js')
    <script src="js/calculator.js"></script>
@endsection
