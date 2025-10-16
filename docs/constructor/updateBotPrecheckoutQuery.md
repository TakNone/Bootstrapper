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
	query_id : -6256777766132698742,
	user_id : -3126296852357949687,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : 'ZK5Qck1OW98zC4EJ',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'bDxzmRX2igUMBwG3',
			street_line2 : 'AH5QLs9pva8YBCkT',
			city : 'EHOfwCRNdpSDyGsi',
			state : 'J9pulft3vUVhyMBY',
			country_iso2 : 'pr20vVhPB1uJnXU8',
			post_code : '85MNnUI2JkbcdLCW',
		),
	),
	shipping_option_id : 'pe6NZholGKCiYXq3',
	currency : 'vZFEipw3atROGhdC',
	total_amount : 9077884417499949287,
);
```