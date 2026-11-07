# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 233

```tl
inputInvoicePremiumGiftStars#dabab2ef flags:# user_id:InputUser months:int message:flags.0?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	user_id : $client->get_input_user(user : '@TakNone'),
	months : 89,
	message : $client->textWithEntities(
		text : 'fdwmxMZ0J1eQRluN',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 8,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'UQ4Roe5kijhJpaAr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : 5950065921307101946,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 47,
				document_id : -2722283009394942184,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 45,
				date : 4,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 73,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 32,
				old_text : 'gniWz2r1MxFDavft',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 8,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 76,
			),
		),
	),
);
```