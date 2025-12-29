# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 218

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
	id : 81,
	title : $client->textWithEntities(
		text : 'J4ARzYXaDwdgZi9q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 74,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'kZQLU73IsqlorMBi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 0,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : 5071309786609525886,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 36,
				document_id : 1609933249764054956,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 72,
			),
		),
	),
);
```