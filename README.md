# Techspot - BrEstimateShipping - Magento 2 Module

O Módulo TechSpot Br Estimate Shipping, formata o summary de quotação de frete do carrinho, de forma a mostrar apenas o campo CEP com a máscara padrão Brasil (99999-999).

Se você deseja utilizar o módulo matrix table rate, este módulo também formata o CEP Brasil para o padrão numérico, afim de não bugar o cálculo de frete via matrix table rate.

The TechSpot Br Estimate Shipping Module for Magento 2 hide country and state fields in estimate shipping cart, and show postcode with mask Brazil 99999-999


### Install

Installe via composer:

```
cd <your Magento install dir>
composer require techspot/brestimateshipping
php bin/magento module:enable --clear-static-content Techspot_BrEstimateShipping
php bin/magento setup:static-content:deploy //ou php bin/magento setup:static-content:deploy pt_BR
```

## Authors

* **Bruno Monteiro** - *Initial work* - [TechSpot](https://github.com/techspotbr)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

