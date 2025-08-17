# inputInvoicePremiumGiftStars

**Layer** : 211

```tl
inputInvoicePremiumGiftStars#dabab2ef flags:# user_id:InputUser months:int message:flags.0?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>months</mark> | [`int`](type/int) | NOTHING |
| **message** | [`flags.0?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumGiftStars(
	user_id : $client->inputUserEmpty(),
	months : 36,
	message : $client->textWithEntities(
		text : 'IFqL3nWJhbipAYNm',
		entities : array(
			$client->messageEntityUnknown(
				offset : 10,
				length : 35,
			),
			$client->messageEntityMention(
				offset : 17,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 61,
				length : 62,
			),
			$client->messageEntityBotCommand(
				offset : 75,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 75,
				length : 93,
			),
			$client->messageEntityEmail(
				offset : 86,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 3,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 21,
				length : 32,
			),
			$client->messageEntityCode(
				offset : 19,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 33,
				length : 24,
				language : 'R2f61azoTp4HMwYs',
			),
			$client->messageEntityTextUrl(
				offset : 17,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 49,
				length : 22,
				user_id : 8576364869432489773,
			),
			$client->inputMessageEntityMentionName(
				offset : 49,
				length : 68,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 9,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 44,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 20,
				length : 94,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 60,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 21,
				length : 53,
			),
			$client->messageEntityCustomEmoji(
				offset : 28,
				length : 49,
				document_id : -9169219280110347423,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 10,
				length : 18,
			),
		),
	),
);
```