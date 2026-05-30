# updateBotPrecheckoutQuery

**Description** : *This object contains information about an incoming pre\-checkout query*

**Layer** : 222

```tl
updateBotPrecheckoutQuery#8caa9a96 flags:# query_id:long user_id:long payload:bytes info:flags.0?PaymentRequestedInfo shipping_option_id:flags.1?string currency:string total_amount:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>query_id</mark> | [`long`](type/long) | Unique query identifier |
| <mark>user_id</mark> | [`long`](type/long) | User who sent the query |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot specified invoice payload |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Order info provided by the user |
| **shipping_option_id** | [`flags.1?string`](type/string) | Identifier of the shipping option chosen by the user |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code, or XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Total amount in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotPrecheckoutQuery(
	query_id : -53931363959427915,
	user_id : -5079367855343058685,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'VSesL8pO5g0Nt1hw',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'qHMPIEOz8VKd2Ug9',
			street_line2 : 'YqiTBGp7CzW902yD',
			city : '6WAGSgekfn4RhcPH',
			state : '4LgZlia8q9ARNv1m',
			country_iso2 : 'hEPGmwKFaxAfTHkN',
			post_code : 'QubnHFjhU1YSW09s',
		),
	),
	shipping_option_id : 'wrbgPDCukEq3MnVG',
	currency : 'nVdg2vGlN0X7Tb5Z',
	total_amount : -8917445372751509291,
);
```