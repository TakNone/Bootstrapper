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
			id : 23,
			title : $client->textWithEntities(
				text : 'dnK1w2igC6qRlJcU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 5,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 78,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 14,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : 'yxSaZskPt79jKfwg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 37,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : 6803934865644116683,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 26,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 75,
						document_id : 6263385032353958396,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 53,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 37,
						date : 7,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 74,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 70,
						old_text : 'BW2F9pEmqIwAj6ga',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 78,
					),
				),
			),
		),
	),
);
```