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
		text : 'pMJlGXRFuCj1fW9N',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'GH4pUICrtZojmEu3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : -5520366245220272180,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 9,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : -266651124214153095,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
		),
	),
);
```