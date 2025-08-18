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
		text : 'rwLGFRpe3tqBx0bV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 78,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 80,
				length : 3,
			),
			$client->messageEntityHashtag(
				offset : 26,
				length : 70,
			),
			$client->messageEntityBotCommand(
				offset : 2,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 37,
				length : 78,
			),
			$client->messageEntityEmail(
				offset : 79,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 51,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 6,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 100,
				length : 32,
			),
			$client->messageEntityPre(
				offset : 49,
				length : 82,
				language : 'gd0aieM7Ex5XFsjh',
			),
			$client->messageEntityTextUrl(
				offset : 65,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 9,
				length : 30,
				user_id : 1986745907345436301,
			),
			$client->inputMessageEntityMentionName(
				offset : 46,
				length : 12,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 70,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 8,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 19,
				length : 46,
			),
			$client->messageEntityStrike(
				offset : 56,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 91,
				length : 31,
			),
			$client->messageEntitySpoiler(
				offset : 10,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 79,
				length : 77,
				document_id : -8664193367656951333,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 48,
				length : 45,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 59,
			title : $client->textWithEntities(
				text : 'npUAzmMGdKbwiLNa',
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