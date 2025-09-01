# updateBotPrecheckoutQuery

**Layer** : 214

```tl
updateBotPrecheckoutQuery#8caa9a96 flags:# query_id:long user_id:long payload:bytes info:flags.0?PaymentRequestedInfo shipping_option_id:flags.1?string currency:string total_amount:long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | NOTHING |
| **shipping_option_id** | [`flags.1?string`](type/string) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>total_amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotPrecheckoutQuery(
	query_id : 3258178629606117789,
	user_id : -7154486865861974971,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'jdoKpev49BrwHksE',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '6g2dl1mMuwG7Cbpz',
			street_line2 : 'f1naT3JK7iscEN4L',
			city : 'W6I0PzXaN5wRjYGO',
			state : '7KSZyjazNI325EUp',
			country_iso2 : 'O59hF8NEYyqt7x06',
			post_code : 'mSYOk8htop1Gd6Ty',
		),
	),
	shipping_option_id : 'KqANj06z7HPtnMxO',
	currency : 'v8y5A3D7Zeb6aGXJ',
	total_amount : -7547734748862276379,
);
```