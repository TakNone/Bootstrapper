# todoList

**Layer** : 211

```tl
todoList#49b92a26 flags:# others_can_append:flags.0?true others_can_complete:flags.1?true title:TextWithEntities list:Vector<TodoItem> = TodoList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **others_can_append** | [`flags.0?true`](type/true) | NOTHING |
| **others_can_complete** | [`flags.1?true`](type/true) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| <mark>list</mark> | [`Vector<TodoItem>`](type/TodoItem) | NOTHING |

---

## Type

[TodoList](type/TodoList)

---

## Example

```php
$todoList = $client->todoList(
	others_can_append : true,
	others_can_complete : true,
	title : $client->textWithEntities(
		text : 'KkZ8hGA9PXeURoa1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 85,
				length : 70,
			),
			$client->messageEntityMention(
				offset : 73,
				length : 97,
			),
			$client->messageEntityHashtag(
				offset : 45,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 28,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 12,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 88,
				length : 37,
			),
			$client->messageEntityBold(
				offset : 3,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 6,
				length : 9,
			),
			$client->messageEntityCode(
				offset : 66,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 39,
				length : 77,
				language : 'OgqKMZv9wGpkXtEi',
			),
			$client->messageEntityTextUrl(
				offset : 66,
				length : 42,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 17,
				length : 13,
				user_id : -5832518697958405000,
			),
			$client->inputMessageEntityMentionName(
				offset : 62,
				length : 58,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 3,
				length : 77,
			),
			$client->messageEntityCashtag(
				offset : 66,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 67,
				length : 25,
			),
			$client->messageEntityStrike(
				offset : 80,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 28,
				length : 63,
			),
			$client->messageEntitySpoiler(
				offset : 15,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 2,
				length : 68,
				document_id : 482021172102891340,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 12,
				length : 65,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 11,
			title : $client->textWithEntities(
				text : 'Qc725UN3XtoLew9q',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
	),
);
```