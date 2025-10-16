# messageActionGiftStars

**Description** : *You gifted or were gifted some Telegram Stars*

**Layer** : 216

```tl
messageActionGiftStars#45d5b021 flags:# currency:string amount:long stars:long crypto_currency:flags.0?string crypto_amount:flags.0?long transaction_id:flags.1?string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the gift in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>stars</mark> | [`long`](type/long) | Amount of gifted stars |
| **crypto_currency** | [`flags.0?string`](type/string) | If the gift was bought using a cryptocurrency, the cryptocurrency name |
| **crypto_amount** | [`flags.0?long`](type/long) | If the gift was bought using a cryptocurrency, price of the gift in the smallest units of a cryptocurrency |
| **transaction_id** | [`flags.1?string`](type/string) | Identifier of the transaction, only visible to the receiver of the gift |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftStars(
	currency : 'kVeQSWy4FtnwJBC6',
	amount : -425016763963046066,
	stars : 125954718099350701,
	crypto_currency : 'DOaHQNVP8TKJALd3',
	crypto_amount : 8933165361574284730,
	transaction_id : 'LAKkaxzf28ibTQCs',
);
```