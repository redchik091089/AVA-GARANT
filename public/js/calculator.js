(function ($) {
    $(function () {

        calculate();

        jQuery('#calculator input').keyup(function() {
            this.value = this.value.replace(/[^0-9\.,]/g, '');
            this.value = this.value.replace(/[,]/, '.');
        });
        jQuery('#calculator input, #calculator select').change(function() {
            calculate();
        });
        jQuery('#calculator input').keyup(function() {
            calculate();
        });
        function calculate() {
            $('.calculator').each(function(key, val){
                calcInputs = {};
                $(this).find('input, select').each(function(key, val){
                    name = $(this).attr('name');
                    val = $(this).val();
                    if (!$.isNumeric(val)) {
                        switch (name) {
                            case 'area':
                                val = '';
                                break;
                            case 'corners':
                                val = '';
                                break;
                            case 'lamp':
                                val = '';
                                break;
                            case 'tube':
                                val = '';
                                break;
                            case 'chandelier-hook':
                                val = '';
                                break;
                            case 'baget':
                                val = '';
                                break;
                            default:
                                break;
                        }
                        $(this).val(val);
                    }
                    calcInputs[name] = val;
                });

                total = 0;

                switch (calcInputs.texture) {
                    case 'mat':
                        total += calcInputs.area * 480;
                        break;
                    // case 'glossy':
                    //     total += calcInputs.area * 180;
                    //     break;
                    // case 'satin':
                    //     total += calcInputs.area * 180;
                    //     break;
                    // case 'fabric':
                    //     total += calcInputs.area * 900;
                    //     break;
                    default:
                        break;
                }

                // каждый угол
                if (calcInputs.corners > 4) {
                    corners = calcInputs.corners - 4;
                    total += corners * 150;
                }

                // установка люстры
                if (calcInputs['chandelier-hook'] >= 1) {
                    total += calcInputs['chandelier-hook'] * 500;
                }
                // установка встраемого светильника
                if (calcInputs.lamp >= 1) {
                    total += calcInputs.lamp * 350;
                }
                // обход трубы
                if (calcInputs.tube >= 1) {
                    total += calcInputs.tube * 350;
                }
                // багет
                if (calcInputs.baget >= 1) {
                    total += calcInputs.baget * 100;
                }

                // install = calcInputs.area * 170;
                // total += install;

                total += ' руб.';
                jQuery(this).find('span.total').html(total);
            });
        }

    });
})(jQuery);
