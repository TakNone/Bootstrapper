# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 222

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
	id : 65,
	title : $client->textWithEntities(
		text : 'DP6lbNnaCtOqF41o',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 75,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : '8pb7IXu0CF1xRtzi',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : 4811126756009117786,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : 5175217771163286597,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
		),
	),
);
```