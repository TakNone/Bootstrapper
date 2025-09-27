# messageActionPaymentSentMe

**Description** : *A user just sent a payment to me \(a bot\)*

**Layer** : 214

```tl
messageActionPaymentSentMe#ffa00ccc flags:# recurring_init:flags.2?true recurring_used:flags.3?true currency:string total_amount:long payload:bytes info:flags.0?PaymentRequestedInfo shipping_option_id:flags.1?string charge:PaymentCharge subscription_until_date:flags.4?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **recurring_init** | [`flags.2?true`](type/true) | Whether this is the first payment of a recurring payment we just subscribed to |
| **recurring_used** | [`flags.3?true`](type/true) | Whether this payment is part of a recurring payment |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code, or XTR for Telegram Stars |
| <mark>total_amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot specified invoice payload |
| **info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Order info provided by the user |
| **shipping_option_id** | [`flags.1?string`](type/string) | Identifier of the shipping option chosen by the user |
| <mark>charge</mark> | [`PaymentCharge`](type/PaymentCharge) | Provider payment identifier |
| **subscription_until_date** | [`flags.4?int`](type/int) | Expiration date of the Telegram Star subscription » |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaymentSentMe(
	recurring_init : true,
	recurring_used : true,
	currency : 'dQj2RXJF7uaotKgI',
	total_amount : -6920682325978962888,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	info : $client->paymentRequestedInfo(
		name : '8XLstTRHiZBjJEAK',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'keJ8hrapib5Gu6CF',
			street_line2 : 'NhcDvfX4gnS17HTI',
			city : 'LoTCwJmbB5UkyAn3',
			state : 'f18bx47B25csLDCA',
			country_iso2 : 'erH2gdtfKkhCj35J',
			post_code : 'et3dkKv67gSVGBWZ',
		),
	),
	shipping_option_id : 'pbU6M8XfSoYkcNGw',
	charge : $client->paymentCharge(
		id : 'DT4UKo8qjtvhZnAm',
		provider_charge_id : 'lUZWPEd3SfFKokHB',
	),
	subscription_until_date : 15,
);
```