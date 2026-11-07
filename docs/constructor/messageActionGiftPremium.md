# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 233

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
| <mark>days</mark> | [`int`](type/int) | Duration of the gifted Telegram Premium subscription, in days |
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
	currency : 'S0HQP1Jk7AjzaYd8',
	amount : -8947798496070400090,
	days : 49,
	crypto_currency : '3RgN7uTaMfAtxHvh',
	crypto_amount : 4179452915079743620,
	message : $client->textWithEntities(
		text : 'KubjkzHywc8fTi5a',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 79,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 61,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 66,
				language : 'FGX28SYhNwcgO1VZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : -2881332519403831984,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 98,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -722334542542289115,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 56,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 27,
				date : 26,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 90,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 85,
				old_text : 'nMJxbV167hY8SDfv',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 83,
			),
		),
	),
);
```