# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 229

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
	months : 28,
	message : $client->textWithEntities(
		text : 'fTNI9OU2tuSrXz71',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 7,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 99,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 48,
				language : 'F2TA86rMDeEzoixn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 27,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : 8993744555246669107,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 74,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : 4287773726826832109,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 1,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 37,
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 90,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 82,
				old_text : '6Ef8iDdQSzR72YVB',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 36,
			),
		),
	),
);
```