# payments.getOnrampLimits

**Layer** : 233

```tl
payments.getOnrampLimits#80e851fd flags:# provider:string crypto_currency:string base_currency:string payment_method:flags.0?string = OnrampLimits;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>provider</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>base_currency</mark> | [`string`](type/string) | NOTHING |
| **payment_method** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[OnrampLimits](type/OnrampLimits)

---

## Example

```php
$onrampLimits = $client->payments->getOnrampLimits(
	provider : 'pNPmbjJ4OMzcIfir',
	crypto_currency : '6m8zldHPuLSKAOfJ',
	base_currency : 'l1Xb5HhvQk8ZFRji',
	payment_method : 'jePRksKy4QpJqXWO',
);
```