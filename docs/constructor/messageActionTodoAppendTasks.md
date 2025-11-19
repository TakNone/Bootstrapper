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
			id : 83,
			title : $client->textWithEntities(
				text : 'DrLhtCVvHbgAfijZ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 8,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 60,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 71,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 6,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 46,
						language : 'MWNlC9UI3yAvEaKR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : -7732676670756138901,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 67,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 82,
						document_id : -2820344693174516482,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 14,
					),
				),
			),
		),
	),
);
```