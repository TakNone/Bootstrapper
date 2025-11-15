# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 216

```tl
messageActionGiftPremium#6c6274fa flags:# currency:string amount:long months:int crypto_currency:flags.0?string crypto_amount:flags.0?long message:flags.1?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the gift in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>months</mark> | [`int`](type/int) | Duration of the gifted Telegram Premium subscription |
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
	currency : 'lwiFBULYQbveA273',
	amount : -4957602429199352553,
	months : 29,
	crypto_currency : '5QxEi9UbSwJIHX2z',
	crypto_amount : -4724143709960473437,
	message : $client->textWithEntities(
		text : 'Kvqgs6n8YtoBATz5',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 92,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 73,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : 'SZRDhAMKYVJte1cf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 79,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -4578371116362754730,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 43,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 35,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : -5545295856510606490,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
		),
	),
);
```