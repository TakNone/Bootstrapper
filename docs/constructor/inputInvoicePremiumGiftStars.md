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
	months : 66,
	message : $client->textWithEntities(
		text : 'oHDsZEG1bMJUpRVK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 11,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 12,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 40,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 75,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 96,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 95,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 58,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 67,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 94,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 52,
				length : 30,
				language : 'cF5zBxYLmr1fCTb3',
			),
			$client->messageEntityTextUrl(
				offset : 17,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 90,
				length : 25,
				user_id : 5996324724296793309,
			),
			$client->inputMessageEntityMentionName(
				offset : 18,
				length : 4,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 70,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 43,
				length : 76,
			),
			$client->messageEntityUnderline(
				offset : 66,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 77,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 47,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 20,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 43,
				length : 28,
				document_id : -1762173717606762685,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 15,
				length : 96,
			),
		),
	),
);
```