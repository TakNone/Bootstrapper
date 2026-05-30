# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 222

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
			text : 'AB7ZzWm0tqehC6R8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 85,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 46,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'Bw3jtzg7N8MoJU0S',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 96,
					user_id : 5014733782516396866,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 6,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 64,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 49,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 48,
					document_id : -1770942104839237830,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 74,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 47,
				title : $client->textWithEntities(
					text : 'ArcKzfT7DmoeJZ9q',
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