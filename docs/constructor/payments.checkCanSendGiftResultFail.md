# payments.checkCanSendGiftResultFail

**Layer** : 214

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
		text : 'osJFHgE9PQrT6XnV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 78,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 63,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 32,
				language : 'JVZG97mLIWN6uvpy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 26,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : -2614024029020612073,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 96,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 33,
				document_id : -4487732045448871733,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
	),
);
```