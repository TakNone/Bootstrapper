# updateBotPrecheckoutQuery

**Description** : *This object contains information about an incoming pre\-checkout query*

**Layer** : 218

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
	query_id : 8895784219531970016,
	user_id : 6975184592722370513,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'uPaVS9xC0wZnEdOW',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'LI60YMgBHl3tKOfs',
			street_line2 : 'pO0BbCgUy5VscPGq',
			city : 'mVsEMywYac2C9k47',
			state : '0ZS2cqBxdgsiyPur',
			country_iso2 : 'Ou4AqwgjVr2XoeRi',
			post_code : 'QUa5st7CZpPDFKSq',
		),
	),
	shipping_option_id : 'irCnDcU06J4ZOtMz',
	currency : '2oZiyjwQRPWxBsqE',
	total_amount : -3445788353063667235,
);
```