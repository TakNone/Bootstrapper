# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 222

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
			id : 71,
			title : $client->textWithEntities(
				text : '9VDoqa8J7Qt4AU2l',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 28,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 90,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 47,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 26,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 91,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : 'HeMcCGaVTBYfkgm7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 76,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : -3670755312234865147,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 22,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 15,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 98,
						document_id : -1545514378539390057,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 40,
					),
				),
			),
		),
	),
);
```