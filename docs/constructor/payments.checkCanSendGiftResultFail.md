# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 227

```tl
payments.checkCanSendGiftResultFail#d5e58274 reason:TextWithEntities = payments.CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reason</mark> | [`TextWithEntities`](type/TextWithEntities) | The reason why it can't be sent yet |

---

## Type

[payments.CheckCanSendGiftResult](type/payments.CheckCanSendGiftResult)

---

## Example

```php
$paymentsCheckCanSendGiftResult = $client->payments->checkCanSendGiftResultFail(
	reason : $client->textWithEntities(
		text : 'yCEq0sxZjI6r8lnA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 23,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 98,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 45,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 40,
				language : 'oacSVbiy3eJLWGTv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : -1992039071783925124,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 84,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : 7602660879346165482,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 31,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 66,
				date : 42,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 67,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 47,
				old_text : 'DQ2XP5LYaKihpBH8',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 59,
			),
		),
	),
);
```