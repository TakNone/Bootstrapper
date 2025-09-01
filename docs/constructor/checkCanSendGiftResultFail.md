# checkCanSendGiftResultFail

**Layer** : 214

```tl
checkCanSendGiftResultFail#d5e58274 reason:TextWithEntities = CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reason</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[CheckCanSendGiftResult](type/CheckCanSendGiftResult)

---

## Example

```php
$checkCanSendGiftResult = $client->checkCanSendGiftResultFail(
	reason : $client->textWithEntities(
		text : '4TtBhIQnKqwk6Uiv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 11,
				length : 59,
			),
			$client->messageEntityMention(
				offset : 69,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 41,
				length : 12,
			),
			$client->messageEntityBotCommand(
				offset : 44,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 95,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 65,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 83,
				length : 25,
			),
			$client->messageEntityItalic(
				offset : 100,
				length : 54,
			),
			$client->messageEntityCode(
				offset : 88,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 60,
				length : 12,
				language : 'Slb9AWenJu2CQV4K',
			),
			$client->messageEntityTextUrl(
				offset : 65,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 96,
				length : 1,
				user_id : -5633280897566177448,
			),
			$client->inputMessageEntityMentionName(
				offset : 27,
				length : 100,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 19,
				length : 39,
			),
			$client->messageEntityCashtag(
				offset : 17,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 23,
				length : 88,
			),
			$client->messageEntityStrike(
				offset : 57,
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 55,
				length : 74,
			),
			$client->messageEntitySpoiler(
				offset : 54,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 49,
				length : 8,
				document_id : -1585741074453915492,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 19,
				length : 1,
			),
		),
	),
);
```