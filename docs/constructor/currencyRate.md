# currencyRate

**Layer** : 233

```tl
currencyRate#30d9743c currency:string rate:double = CurrencyRate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>rate</mark> | [`double`](type/double) | NOTHING |

---

## Type

[CurrencyRate](type/CurrencyRate)

---

## Example

```php
$currencyRate = $client->currencyRate(
	currency : 'QluNs1knjA9FzLd2',
	rate : 378478.21484375,
);
```