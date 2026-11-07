# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 233

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
		text : 'jroa9Jg4TuQOPKUz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 29,
				language : 'AxIeYfaV8Zni92pg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : 8542452796789458145,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : -3774141998359627345,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 23,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 70,
				date : 79,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 21,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 29,
				old_text : 'u3KIeMycvZSWCAkp',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 49,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 63,
			),
		),
	),
);
```