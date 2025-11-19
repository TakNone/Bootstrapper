# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 218

```tl
messageActionTodoAppendTasks#c7edbc83 list:Vector<TodoItem> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>list</mark> | [`Vector<TodoItem>`](type/TodoItem) | Appended items |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTodoAppendTasks(
	list : array(
		$client->todoItem(
			id : 90,
			title : $client->textWithEntities(
				text : 'ozLuQ1bv459UKwMI',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 35,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 66,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 99,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 68,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 19,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 59,
						language : 'hV3HybqgaMx8vADE',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 96,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : -6038988729520770291,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : 7634411990060632854,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 24,
					),
				),
			),
		),
	),
);
```