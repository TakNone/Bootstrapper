# payments.getOnrampQuote

**Layer** : 233

```tl
payments.getOnrampQuote#e06645fa flags:# provider:string crypto_currency:string base_currency:string base_amount:flags.0?string crypto_amount:flags.1?string payment_method:flags.2?string = OnrampQuote;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>provider</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>base_currency</mark> | [`string`](type/string) | NOTHING |
| **base_amount** | [`flags.0?string`](type/string) | NOTHING |
| **crypto_amount** | [`flags.1?string`](type/string) | NOTHING |
| **payment_method** | [`flags.2?string`](type/string) | NOTHING |

---

## Result

[OnrampQuote](type/OnrampQuote)

---

## Example

```php
$onrampQuote = $client->payments->getOnrampQuote(
	provider : 'JwamknONFsblYo8C',
	crypto_currency : '9rYydAfwRUSBJbt1',
	base_currency : '8BUAaLfONIZiKCwq',
	base_amount : 'H58LnRUSPdqT3wFA',
	crypto_amount : 'AZRfGi41d2CYamrP',
	payment_method : 'MsKk927SeHT4NWO3',
);
```