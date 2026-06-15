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
	months : 58,
	message : $client->textWithEntities(
		text : 'FCvMcukNHrTIXW0P',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 2,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 61,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 24,
				language : '1PzKYyqiwSfxtOTn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : 9096326572931715212,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 7,
				document_id : -8549437205162089184,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 9,
				date : 56,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 52,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 22,
				old_text : 'RX974c5D8KrhVICO',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 89,
			),
		),
	),
);
```