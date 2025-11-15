# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 216

```tl
inputInvoicePremiumGiftStars#dabab2ef flags:# user_id:InputUser months:int message:flags.0?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Who will receive the gifted subscription |
| <mark>months</mark> | [`int`](type/int) | Duration of the subscription in months, must be one of the options with currency == "XTR" returned by payments.getPremiumGiftCodeOptions |
| **message** | [`flags.0?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumGiftStars(
	user_id : $client->inputUserEmpty(),
	months : 100,
	message : $client->textWithEntities(
		text : 'qUhEIixtu1O6s3YM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 17,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 70,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 80,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : 'FIfGlQa3M0nUhNZp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 82,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : -569285020840831382,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : -7208957412701906513,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
		),
	),
);
```