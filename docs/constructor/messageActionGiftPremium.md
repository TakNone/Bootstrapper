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
	currency : '017tJECcIqx2O9bT',
	amount : -6659901539549433402,
	months : 63,
	crypto_currency : 'OdGuxsWeIAfykVzK',
	crypto_amount : -3595266499913366323,
	message : $client->textWithEntities(
		text : 'bzOBHtAVnlwUJs6r',
		entities : array(
			$client->messageEntityUnknown(
				offset : 92,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 1,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 33,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 33,
				length : 2,
			),
			$client->messageEntityUrl(
				offset : 93,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 45,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 96,
				length : 73,
			),
			$client->messageEntityItalic(
				offset : 59,
				length : 65,
			),
			$client->messageEntityCode(
				offset : 100,
				length : 6,
			),
			$client->messageEntityPre(
				offset : 66,
				length : 32,
				language : 'vZbenwFYxLW75RkT',
			),
			$client->messageEntityTextUrl(
				offset : 24,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 97,
				length : 52,
				user_id : 5220742075478098463,
			),
			$client->inputMessageEntityMentionName(
				offset : 41,
				length : 47,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 62,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 65,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 54,
				length : 59,
			),
			$client->messageEntityStrike(
				offset : 41,
				length : 19,
			),
			$client->messageEntityBankCard(
				offset : 18,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 57,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 63,
				length : 96,
				document_id : -1976895680023309076,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 86,
				length : 82,
			),
		),
	),
);
```