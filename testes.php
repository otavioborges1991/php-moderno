<?php
// cotação do dólar copiada do google hoje (05/08/2025)
$cotacao = 5.50;
// valor da carteira em reais
$carteira = 1000; // valor em reais
// conversão do valor da carteira para dólares
$carteiraDolar = $carteira / $cotacao; // valor em dólares
// formatação do valor da carteira em dólares com internacionalização
$padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
echo "Seus R\$" . numfmt_format_currency($padrão, $carteira, 'BRL') . " equivalem a " . numfmt_format_currency($padrão, $carteiraDolar, 'USD') . " dólares americanos.";
