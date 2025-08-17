# messageActionGiftPremium

**Description** : *Info about a gifted Telegram Premium subscription*

**Layer** : 211

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
	currency : 'CgzMaV24UBEch7p5',
	amount : 1458668536198759176,
	months : 56,
	crypto_currency : 'bHkSJWcpvs1EqaBr',
	crypto_amount : 6910079885279087135,
	message : $client->textWithEntities(
		text : 'MRznvypaw1xokCrH',
		entities : array(
			$client->messageEntityUnknown(
				offset : 48,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 22,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 51,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 94,
				length : 36,
			),
			$client->messageEntityUrl(
				offset : 7,
				length : 76,
			),
			$client->messageEntityEmail(
				offset : 89,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 59,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 55,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 82,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 49,
				length : 7,
				language : 'oQhSIVWRi6cEwtCb',
			),
			$client->messageEntityTextUrl(
				offset : 88,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 56,
				length : 91,
				user_id : -2494562686058881435,
			),
			$client->inputMessageEntityMentionName(
				offset : 22,
				length : 82,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 96,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 27,
				length : 92,
			),
			$client->messageEntityUnderline(
				offset : 43,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 50,
				length : 81,
			),
			$client->messageEntityBankCard(
				offset : 53,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 96,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 21,
				length : 32,
				document_id : -5722189321451292440,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 74,
				length : 80,
			),
		),
	),
);
```