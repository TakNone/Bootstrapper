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
		text : 'AjIp3dHBmGuMNb5U',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 77,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 39,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : '0a6v7QVTbeq2k8x1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : -8411976733776838431,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 12,
				document_id : 1202285793863227524,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 17,
				date : 97,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 20,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 45,
				old_text : 'V1Je3UkXa4RtFQ9E',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 49,
			),
		),
	),
);
```