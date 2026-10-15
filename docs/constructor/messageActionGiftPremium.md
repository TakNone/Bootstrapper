# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 229

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
	currency : 'yOn63CvlA1o9QuRs',
	amount : 3541802599271193460,
	days : 59,
	crypto_currency : 'GrCSDKWvEBeckfbd',
	crypto_amount : -2904755918685813895,
	message : $client->textWithEntities(
		text : 'eZHx2MDkR04oTuvj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 34,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'MeISj3DFYJgah5tC',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -4393447933032947729,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 31,
				document_id : -6490745875089873844,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 62,
				date : 95,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 26,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 19,
				old_text : 'QyvWCmdphN2eakAR',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
		),
	),
);
```