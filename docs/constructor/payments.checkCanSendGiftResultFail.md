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
		text : 'EL6IpBXboqVgfxN4',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'WUPwkdD6vrRjn28X',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 73,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : -7795233714831690094,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 69,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -1957657469407149570,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
		),
	),
);
```