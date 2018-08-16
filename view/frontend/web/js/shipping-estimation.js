require(['jquery', 'inputMask'], function($, pessoaFisica, pessoaJuridica){
    'use strict';
    
    $(document).ready(
        function(){
            $(document).on("focus", "input[name='postcode']", function () {
                $(document).find("select[name='country_id']").val("BR").change();
                $(this).inputmask("99999-999");
            });

            $(document).on("change", "#block-shipping", function () {
                $(document).find("div[name='shippingAddress.country_id'], div[name='shippingAddress.region'], div[name='shippingAddress.region_id']").hide();
                $(".totals-tax").hide();
            });
        }
    );
});