# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 227

```tl
inputMediaTodo#9fc55fde todo:TodoList = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>todo</mark> | [`TodoList`](type/TodoList) | The todo list |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaTodo(
	todo : $client->todoList(
		others_can_append : true,
		others_can_complete : true,
		title : $client->textWithEntities(
			text : 'flzAE5xqtZ6DouXw',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 21,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 94,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 85,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 21,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 0,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 51,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 48,
					language : 'g7nMZPoeBlEt29R5',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 37,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : -5483945729265447900,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 25,
					document_id : 1986792119713181300,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 70,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 34,
					date : 82,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 54,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 20,
					old_text : '5lXgMJGCvrWzhnEq',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 57,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 94,
				title : $client->textWithEntities(
					text : 'whQFOPnDz0YLCa3J',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
			),
		),
	),
);
```