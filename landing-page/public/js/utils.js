jQuery(function($){
            correios.init( '6OezFODL4XYLOUs3fF2XLQGPwJi2GZ4T', 'FF6h9tTxL6ODQPifjRtHfLDvQk5lmLhy2QggSOgDv5Zc6Xpt' );
            $('#cep').correios( '#street', '#neighb', '#city', '#state');

			$("#telefone").mask("(99) 9 9999-9999");

			$("#cep").mask("99.999-999");
});

