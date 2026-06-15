# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 227

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
			id : 70,
			title : $client->textWithEntities(
				text : 'k8OFXKW7rsMCGNgT',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 85,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 63,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 93,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : '6L2xCtPdeVk3FfQ7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : 558523920690062399,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 79,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : 6009387132724905793,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 6,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 93,
						date : 59,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 2,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 66,
						old_text : 'UHr8kFzSs1umMGwQ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 89,
					),
				),
			),
		),
	),
);
```