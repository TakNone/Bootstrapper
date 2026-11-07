# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 233

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
			id : 2,
			title : $client->textWithEntities(
				text : '4UMNPikRzu0JEVyn',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 9,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 39,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 8,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 63,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 15,
						language : 'Wpm5GnTPswhVKur8',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : 7108868834468997698,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 99,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 29,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 53,
						document_id : -8645397560327559634,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 75,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 45,
						date : 12,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 74,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 20,
						old_text : 'NV3alTLZRvY9MX8I',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 73,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 37,
					),
				),
			),
		),
	),
);
```