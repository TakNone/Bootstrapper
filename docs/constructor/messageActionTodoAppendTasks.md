# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 229

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
			id : 55,
			title : $client->textWithEntities(
				text : 'dFcKLDXM07rplTmA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 90,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 96,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 20,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 65,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 33,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 70,
						language : 'Q9ZhkVjTaeBPWlSx',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 33,
						user_id : 3938452154767253922,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 80,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 50,
						document_id : -2674383408695364988,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 3,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 56,
						date : 28,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 74,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 27,
						old_text : 'dLD7qjnzC3iuFyN2',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 94,
					),
				),
			),
		),
	),
);
```