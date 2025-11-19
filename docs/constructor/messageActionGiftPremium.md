# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 218

```tl
messageActionGiftPremium#48e91302 flags:# currency:string amount:long days:int crypto_currency:flags.0?string crypto_amount:flags.0?long message:flags.1?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	currency : 'TcEvlUwCWRBs7dt5',
	amount : -7481232104082084040,
	days : 70,
	crypto_currency : 'cLgEiS6XP7r2esCt',
	crypto_amount : -8498561439186688361,
	message : $client->textWithEntities(
		text : 'ahJX2Z3W4p0Q58kV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 80,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'NhSQEJ8Gj631Bxvi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 100,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : -4668857771592683462,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 14,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 95,
				document_id : 2583425895170949366,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
		),
	),
);
```