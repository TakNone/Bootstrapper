# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 214

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
	currency : 'oNqZtL0F3TaP1us5',
	amount : -6643633962815438056,
	months : 32,
	crypto_currency : 'sg5vL8jmwunhplcH',
	crypto_amount : -9059002241399175669,
	message : $client->textWithEntities(
		text : 'ujV74DNJXeO8mKFQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 8,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'bvVl0uwPda9DztHi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 79,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : -288193395084247743,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : 6204105760211412857,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
		),
	),
);
```