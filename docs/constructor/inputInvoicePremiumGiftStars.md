# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 225

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
	months : 100,
	message : $client->textWithEntities(
		text : 'Gw5b04OqUj9JTR3C',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 22,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : 'fHhk7tc61gJsdz8q',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 74,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : -1764072269190622491,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -7435917474770185362,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 92,
				date : 41,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 68,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 28,
				old_text : 'J0Q9N3c6wTDkV1Mz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 6,
			),
		),
	),
);
```