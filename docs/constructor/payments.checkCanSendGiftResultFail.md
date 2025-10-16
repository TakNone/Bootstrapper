# payments.checkCanSendGiftResultFail

**Layer** : 216

```tl
payments.checkCanSendGiftResultFail#d5e58274 reason:TextWithEntities = payments.CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reason</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[payments.CheckCanSendGiftResult](type/payments.CheckCanSendGiftResult)

---

## Example

```php
$paymentsCheckCanSendGiftResult = $client->payments->checkCanSendGiftResultFail(
	reason : $client->textWithEntities(
		text : 'DO6gp92W7PEkCHyK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 65,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : '3I8aH2oSg6dEsqrV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : 5096645102866553788,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : -5369710517028678529,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 31,
			),
		),
	),
);
```