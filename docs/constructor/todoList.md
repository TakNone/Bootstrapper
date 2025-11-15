# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 216

```tl
todoList#49b92a26 flags:# others_can_append:flags.0?true others_can_complete:flags.1?true title:TextWithEntities list:Vector<TodoItem> = TodoList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **others_can_append** | [`flags.0?true`](type/true) | If set, users different from the creator of the list can append items to the list |
| **others_can_complete** | [`flags.1?true`](type/true) | If set, users different from the creator of the list can complete items in the list |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Title of the todo list, maximum length equal to todo_title_length_max » |
| <mark>list</mark> | [`Vector<TodoItem>`](type/TodoItem) | Items of the list |

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
		text : 'I5tP9X3kRSViLZBz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 33,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 71,
				language : '0YwWcRHj2mUAMxJb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 100,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : -1379001496449425376,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 99,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : 5618511717884306908,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 21,
			title : $client->textWithEntities(
				text : 'GbNylqYvficjs59n',
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