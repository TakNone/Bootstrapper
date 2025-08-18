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
	currency : 'm1fvF0E56MkDVRdb',
	amount : -4036815213632300979,
	months : 20,
	crypto_currency : 'g2Sk3bXz0fuT9r1L',
	crypto_amount : 1463303087942893559,
	message : $client->textWithEntities(
		text : 'hMW0VnvZ8iSXjHOG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 60,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 83,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 21,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 26,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 32,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 14,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 24,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 59,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 24,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 7,
				length : 11,
				language : 'GQ6F2kV5ZHpwiv3z',
			),
			$client->messageEntityTextUrl(
				offset : 30,
				length : 38,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 9,
				length : 87,
				user_id : 3533422512171391910,
			),
			$client->inputMessageEntityMentionName(
				offset : 37,
				length : 63,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 46,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 64,
				length : 46,
			),
			$client->messageEntityUnderline(
				offset : 7,
				length : 20,
			),
			$client->messageEntityStrike(
				offset : 84,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 57,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 85,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 94,
				length : 63,
				document_id : 3732710260764574871,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 85,
				length : 83,
			),
		),
	),
);
```