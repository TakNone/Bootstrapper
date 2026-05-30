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
			id : 97,
			title : $client->textWithEntities(
				text : 'zP2JuHwe7sXVpSqg',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 87,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 66,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 55,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 95,
						language : 'NGmCcXOeTLR7Avbd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 57,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : 418764381496398877,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 72,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : -5249705661620476338,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 61,
					),
				),
			),
		),
	),
);
```