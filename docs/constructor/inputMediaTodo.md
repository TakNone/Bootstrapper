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
			text : 'hcGvrmgl6eW4oNzY',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 52,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 1,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 89,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 4,
					language : 'qsxLru7QZwzDYVMA',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : -1843037449746792558,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 4,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 55,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 32,
					document_id : 5539397244024626384,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 19,
				title : $client->textWithEntities(
					text : '2xrl3fus7WYBvCIm',
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