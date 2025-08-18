# updateBotPrecheckoutQuery

**Description** : *This object contains information about an incoming pre\-checkout query*

**Layer** : 211

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
	query_id : 3642643128580476923,
	user_id : 3996810485310669470,
	payload : '*\'?ALiveProto=??(?',
	info : $client->paymentRequestedInfo(
		name : 'pDqXOA26NTlij8KF',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'kQgOfs0UNwrMcIxh',
			street_line2 : 'zti8GKoSu452wB3J',
			city : 'tcge82DdSikHVNJ0',
			state : 'XF8xzenWdcNjuPT0',
			country_iso2 : 'JRDT3z4oUnBKG1YH',
			post_code : 'gVNBhMTK8klEjHCx',
		),
	),
	shipping_option_id : 'fGqgucOmHA5n87Ik',
	currency : '9LDreY2f5VMnHvIC',
	total_amount : 4694143470173304465,
);
```