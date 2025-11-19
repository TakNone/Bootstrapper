# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 218

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
		text : 'yMHF7BC2mrVDwaOz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 19,
				language : 'NBYLubQa95dS3DOR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 26,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 25946775212074452,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 79,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 9,
				document_id : 6296179071928771222,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 22,
			),
		),
	),
);
```