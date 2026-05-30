# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 225

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
	currency : 'ZYwCn5RpvS8E96Mh',
	amount : -2567591682026684857,
	days : 8,
	crypto_currency : 'AbsjrTQ6WD8d9Hyl',
	crypto_amount : -1271077051096918890,
	message : $client->textWithEntities(
		text : '1lbhmRtyGYvMcsEe',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 2,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'm5U27VAarOEvKY3L',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : 964598384033067207,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 86,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 73,
				document_id : 4422534413841584319,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 36,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 82,
				date : 2,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 26,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 59,
				old_text : 'QxFBwMtvYGPDXK6f',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 73,
			),
		),
	),
);
```