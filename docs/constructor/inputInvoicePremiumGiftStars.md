# inputInvoicePremiumGiftStars

**Description** : *Used to gift a Telegram Premium subscription to another user, paying with Telegram Stars*

**Layer** : 227

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
	months : 16,
	message : $client->textWithEntities(
		text : 'H2sdf58XiV6K3F0N',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 38,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 13,
				language : 'G7eUKCHX8z0FDy6t',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : -7332600417642351172,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 37,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : 4399111009038698505,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 80,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 60,
				date : 67,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 46,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 67,
				old_text : 'snijlPIh6fEoH1VS',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 61,
			),
		),
	),
);
```