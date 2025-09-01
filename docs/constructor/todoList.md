# todoList

**Layer** : 214

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
		text : '8LQyzjvMEBYr2pGd',
		entities : array(
			$client->messageEntityUnknown(
				offset : 80,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 29,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 40,
				length : 76,
			),
			$client->messageEntityBotCommand(
				offset : 70,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 66,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 75,
				length : 69,
			),
			$client->messageEntityBold(
				offset : 96,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 31,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 69,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 15,
				length : 95,
				language : 'sxgkTXtNIbhrUzK5',
			),
			$client->messageEntityTextUrl(
				offset : 23,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 22,
				length : 58,
				user_id : -3664258571291727698,
			),
			$client->inputMessageEntityMentionName(
				offset : 88,
				length : 44,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 77,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 3,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 68,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 12,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 49,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 14,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 63,
				length : 77,
				document_id : -1714630685772624638,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 63,
				length : 34,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 3,
			title : $client->textWithEntities(
				text : 'FSc4EWPOmTDy63oe',
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