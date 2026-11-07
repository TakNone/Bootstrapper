# payments.currencyRates

**Layer** : 233

```tl
payments.currencyRates#bbcce4c2 rates:Vector<CurrencyRate> = payments.CurrencyRates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>rates</mark> | [`Vector<CurrencyRate>`](type/CurrencyRate) | NOTHING |

---

## Type

[payments.CurrencyRates](type/payments.CurrencyRates)

---

## Example

```php
$paymentsCurrencyRates = $client->payments->currencyRates(
	rates : array(
		$client->currencyRate(
			currency : 'xi79CW64nrSgm8Au',
			rate : -414573.103515625,
		),
	),
);
```