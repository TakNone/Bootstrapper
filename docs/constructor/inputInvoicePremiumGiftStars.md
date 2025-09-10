# inputInvoicePremiumGiftStars

**Layer** : 214

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
	months : 2,
	message : $client->textWithEntities(
		text : 'mu6hKWb4dtJPpkNe',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 89,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : 'nphgfiReXoY7mdaB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : -1447662983868243001,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : 3627996582811007103,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
		),
	),
);
```