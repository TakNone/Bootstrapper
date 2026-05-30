# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 222

```tl
messageActionGiftPremium#48e91302 flags:# currency:string amount:long days:int crypto_currency:flags.0?string crypto_amount:flags.0?long message:flags.1?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the gift in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>days</mark> | [`int`](type/int) | NOTHING |
| **crypto_currency** | [`flags.0?string`](type/string) | If the gift was bought using a cryptocurrency, the cryptocurrency name |
| **crypto_amount** | [`flags.0?long`](type/long) | If the gift was bought using a cryptocurrency, price of the gift in the smallest units of a cryptocurrency |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftPremium(
	currency : 'gjPel1ZcNE7r0HiX',
	amount : 7125081604579283067,
	days : 89,
	crypto_currency : 'FclHr6RMe4D2TW05',
	crypto_amount : 7901702649966113167,
	message : $client->textWithEntities(
		text : 'rmbKEFUOoc1haJje',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 34,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 35,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : 'dSlQYoeA3gnfsD8J',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 42,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : 4769685541956935148,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -3305670147467772967,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
		),
	),
);
```