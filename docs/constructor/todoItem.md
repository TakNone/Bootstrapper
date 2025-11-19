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
	id : 33,
	title : $client->textWithEntities(
		text : 'hTACIbNifFJw8xKD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 33,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 55,
				language : 'qnUcWaARV0mdkQGt',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : 4660356927016070017,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 75,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : -8101645444775520203,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
		),
	),
);
```