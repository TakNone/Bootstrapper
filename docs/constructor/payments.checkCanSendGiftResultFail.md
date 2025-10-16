# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 216

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
		text : 'QgjuyrxlMmVToJWX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 4,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 22,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 83,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 8,
				language : 'RbJiTXa9IPpCzLAl',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 40,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : -4073482958467358018,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -1382746506401978809,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 53,
			),
		),
	),
);
```