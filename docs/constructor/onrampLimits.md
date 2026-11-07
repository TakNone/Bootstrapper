# onrampLimits

**Layer** : 233

```tl
onrampLimits#7be2677e base_currency:string base_min_amount:string base_max_amount:string crypto_min_amount:string crypto_max_amount:string payment_method:string = OnrampLimits;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>base_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>base_min_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>base_max_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_min_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_max_amount</mark> | [`string`](type/string) | NOTHING |
| <mark>payment_method</mark> | [`string`](type/string) | NOTHING |

---

## Type

[OnrampLimits](type/OnrampLimits)

---

## Example

```php
$onrampLimits = $client->onrampLimits(
	base_currency : 'srI936vgJPWcXa8H',
	base_min_amount : 'NHpyQok6FMsIlgdJ',
	base_max_amount : '43CLaPXA0I7vNBj5',
	crypto_min_amount : 'FCockWq4ThPdgMNZ',
	crypto_max_amount : 'Bp0FZd1cW4T9zECl',
	payment_method : 'u4vZjitaV5Smy3f2',
);
```