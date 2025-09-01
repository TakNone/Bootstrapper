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
	months : 67,
	message : $client->textWithEntities(
		text : 'ystw3pcZBgd2V4u6',
		entities : array(
			$client->messageEntityUnknown(
				offset : 96,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 39,
				length : 78,
			),
			$client->messageEntityHashtag(
				offset : 28,
				length : 40,
			),
			$client->messageEntityBotCommand(
				offset : 28,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 90,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 7,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 89,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 57,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 83,
				length : 0,
			),
			$client->messageEntityPre(
				offset : 67,
				length : 94,
				language : 'Z35Wt0AxfGaiVPEF',
			),
			$client->messageEntityTextUrl(
				offset : 17,
				length : 15,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 88,
				length : 93,
				user_id : -2476502895487330000,
			),
			$client->inputMessageEntityMentionName(
				offset : 14,
				length : 23,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 67,
				length : 84,
			),
			$client->messageEntityCashtag(
				offset : 12,
				length : 20,
			),
			$client->messageEntityUnderline(
				offset : 30,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 93,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 37,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 30,
				length : 27,
			),
			$client->messageEntityCustomEmoji(
				offset : 58,
				length : 55,
				document_id : -8959029374292947431,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 82,
				length : 74,
			),
		),
	),
);
```