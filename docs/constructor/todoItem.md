# todoItem

**Layer** : 211

```tl
todoItem#cba9a52f id:int title:TextWithEntities = TodoItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[TodoItem](type/TodoItem)

---

## Example

```php
$todoItem = $client->todoItem(
	id : 64,
	title : $client->textWithEntities(
		text : 'ZNHrRtIc5hFnksiw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 89,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 74,
				length : 37,
			),
			$client->messageEntityHashtag(
				offset : 33,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 38,
				length : 31,
			),
			$client->messageEntityUrl(
				offset : 34,
				length : 62,
			),
			$client->messageEntityEmail(
				offset : 96,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 72,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 56,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 9,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 49,
				length : 51,
				language : 'DyRNHSTMBPm0eLJC',
			),
			$client->messageEntityTextUrl(
				offset : 9,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 18,
				length : 25,
				user_id : -3195822585117936414,
			),
			$client->inputMessageEntityMentionName(
				offset : 68,
				length : 36,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 65,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 50,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 43,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 60,
				length : 37,
			),
			$client->messageEntityBankCard(
				offset : 25,
				length : 53,
			),
			$client->messageEntitySpoiler(
				offset : 55,
				length : 41,
			),
			$client->messageEntityCustomEmoji(
				offset : 93,
				length : 14,
				document_id : 4335120011677764066,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 98,
				length : 16,
			),
		),
	),
);
```