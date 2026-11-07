# payments.createOnrampSession

**Layer** : 233

```tl
payments.createOnrampSession#a2197cf6 flags:# provider:string crypto_currency:string address:string payment_method:flags.0?string base_currency:flags.1?string base_amount:flags.2?string memo:flags.3?string theme:flags.4?string success_return_url:flags.5?string fail_return_url:flags.6?string crypto_amount:flags.7?string = OnrampSession;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>provider</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| **payment_method** | [`flags.0?string`](type/string) | NOTHING |
| **base_currency** | [`flags.1?string`](type/string) | NOTHING |
| **base_amount** | [`flags.2?string`](type/string) | NOTHING |
| **memo** | [`flags.3?string`](type/string) | NOTHING |
| **theme** | [`flags.4?string`](type/string) | NOTHING |
| **success_return_url** | [`flags.5?string`](type/string) | NOTHING |
| **fail_return_url** | [`flags.6?string`](type/string) | NOTHING |
| **crypto_amount** | [`flags.7?string`](type/string) | NOTHING |

---

## Result

[OnrampSession](type/OnrampSession)

---

## Example

```php
$onrampSession = $client->payments->createOnrampSession(
	provider : 'uyLEwIBqA4KGUpbZ',
	crypto_currency : 'GFS6QHRCTPxb4zrp',
	address : 'iOeaMExJZ790nyAI',
	payment_method : '6I4ZSckiD2AVLmUx',
	base_currency : 'OJDspudf5yGqTjX9',
	base_amount : 'TgkXNl4etChYoqDf',
	memo : 'xLlPGMiZaS67my3n',
	theme : 'ojNbGzQ25rZuYqxs',
	success_return_url : 'https://docs.liveproto.dev',
	fail_return_url : 'https://docs.liveproto.dev',
	crypto_amount : 'zVI5UvrCgMi7dbLE',
);
```