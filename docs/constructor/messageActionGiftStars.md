# messageActionGiftStars

**Description** : *You gifted or were gifted some Telegram Stars*

**Layer** : 214

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
	currency : 'piew0hLJ3Ygkyx8V',
	amount : -7513116055237455984,
	stars : -1875760623018612299,
	crypto_currency : '2ZWB0Ak3x7zeKnj6',
	crypto_amount : 780379259645668232,
	transaction_id : 'Gwl7fUkeTv8NSuBD',
);
```