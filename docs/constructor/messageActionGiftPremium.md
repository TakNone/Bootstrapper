# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 227

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
	currency : 'JTqEQIZkilf64X9U',
	amount : -5772673137529809604,
	days : 44,
	crypto_currency : 'BPS9HKDmez5jGndi',
	crypto_amount : 8003638409795288283,
	message : $client->textWithEntities(
		text : 't4PqcC0Y71OSyhvA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 36,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 62,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 51,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : '6g2vdjzroXH8ayQb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -1324992285859952049,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 67,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 81,
				document_id : -7916406170148541017,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 91,
				date : 36,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 79,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 35,
				old_text : 'hzPLxS9Q157qDTbW',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 29,
			),
		),
	),
);
```