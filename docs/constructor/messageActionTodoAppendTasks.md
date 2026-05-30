# messageActionTodoAppendTasks

**Description** : *Items were appended to the todo list &raquo;*

**Layer** : 225

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
				text : '2WLY8dwc5CRBJmQA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 84,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 15,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 11,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 0,
						language : 'y8p0s27Mrbxf4ONH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : -2208111096655068241,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 25,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 11,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 39,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 14,
						document_id : 6207614791567418888,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 96,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 48,
						date : 99,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 27,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 2,
						old_text : 'XIcSe46quZ0YPiyn',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 87,
					),
				),
			),
		),
	),
);
```