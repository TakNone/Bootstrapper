# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 218

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
			text : 'IAYy8Lpoavjni7EW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 62,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 5,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 59,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 52,
					language : 'e2KFyv4DnIqoRwXJ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 29,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : 6994274717298522440,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 47,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 96,
					document_id : -1602985638305161529,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 29,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 56,
				title : $client->textWithEntities(
					text : 'rMcmQek7vOXoG5HW',
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
					),
				),
			),
		),
	),
);
```