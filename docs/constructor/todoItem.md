# todoItem

**Layer** : 214

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
	id : 45,
	title : $client->textWithEntities(
		text : '7dbLqyhOmMY8Uz1Q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 34,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 93,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 18,
				language : 'am0Pyw8kzYTuGODZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 82,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : 3561233671725514872,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 39,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : -252377409026034499,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 14,
			),
		),
	),
);
```