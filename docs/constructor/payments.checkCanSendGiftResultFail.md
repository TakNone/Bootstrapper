# payments.checkCanSendGiftResultFail

**Description** : *The specified gift cannot be sent yet for the specified reason*

**Layer** : 222

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
		text : 'cH3EkGDfrlR2nhSM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 88,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 56,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 27,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'Wwu3pVk6LKZ4x8YG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : -4708050341252189576,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 57,
				document_id : 6584230255945352940,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
		),
	),
);
```