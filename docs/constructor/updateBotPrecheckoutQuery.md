# updateBotPrecheckoutQuery

**Description** : *This object contains information about an incoming pre\-checkout query*

**Layer** : 216

```tl
updateBotPrecheckoutQuery#8caa9a96 flags:# query_id:long user_id:long payload:bytes info:flags.0?PaymentRequestedInfo shipping_option_id:flags.1?string currency:string total_amount:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	query_id : 6571614198108337233,
	user_id : -5005226355825741603,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'qrSmb5uVRiPGyWQo',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '7xwnVE3OMYf6djuG',
			street_line2 : 'PmpNf6ea7Y12IRZQ',
			city : '0szd65fjwtQYSqHU',
			state : 'Qk9g5B4mMnjxLiNR',
			country_iso2 : 'Cf1QpBYSTDnUGu24',
			post_code : '14Wd9SZ3GBg0plPH',
		),
	),
	shipping_option_id : 'e4F3S7ZRCybVBrs9',
	currency : 'wYcSs9Pq7CMxEaem',
	total_amount : -7909662229173423870,
);
```