# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 216

```tl
todoItem#cba9a52f id:int title:TextWithEntities = TodoItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | ID of the item, a positive (non-zero) integer unique within the current list |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Text of the item, maximum length equal to todo_item_length_max » |

---

## Type

[TodoItem](type/TodoItem)

---

## Example

```php
$todoItem = $client->todoItem(
	id : 1,
	title : $client->textWithEntities(
		text : '0iA3LKs2dctkZwah',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 88,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 89,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 16,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 5,
				language : 'NHAhGUagOLRi2oWI',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : -8451429822097864559,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 68,
				document_id : 8574618443959291764,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 5,
			),
		),
	),
);
```