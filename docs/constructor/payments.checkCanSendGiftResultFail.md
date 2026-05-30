# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 225

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
		text : 'uyTLE7CDB93Ht4O0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 86,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 5,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 15,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 29,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'Pqw9NGyRo0Hkn38K',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : -1663116477652573595,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 99,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : 8441529883865703494,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 73,
				date : 62,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 22,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 51,
				old_text : 'udolBITUHLmVJ3P4',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 47,
			),
		),
	),
);
```