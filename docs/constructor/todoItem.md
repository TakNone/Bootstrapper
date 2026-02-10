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
	id : 2,
	title : $client->textWithEntities(
		text : 'LYu4GMgOV05v3FEP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 31,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 84,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 22,
				language : 'naR4VJPpIU8rQT7v',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : 367289983463190634,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 9,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -7684742628866766447,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 95,
			),
		),
	),
);
```