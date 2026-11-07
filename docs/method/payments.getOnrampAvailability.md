# payments.getOnrampAvailability

**Layer** : 233

```tl
payments.getOnrampAvailability#2ec29951 flags:# provider:string crypto_currency:string base_currency:flags.0?string = OnrampAvailability;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>provider</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| **base_currency** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[OnrampAvailability](type/OnrampAvailability)

---

## Example

```php
$onrampAvailability = $client->payments->getOnrampAvailability(
	provider : 'N9SsYCcgbjuzxdm4',
	crypto_currency : 'mp6g39yA0Pelkczf',
	base_currency : 'Tdn28sIH4q6cMvQO',
);
```