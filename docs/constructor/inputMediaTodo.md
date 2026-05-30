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
			text : 'ZLmPitsD0NRx7zQU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 40,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 18,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 82,
					language : 'gUdDMnN4sTqWL2CR',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 12,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : -5119782406939121001,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 72,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 55,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 76,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 69,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : -2490768346022260617,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 53,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 38,
				title : $client->textWithEntities(
					text : 'XIK7lymGgDRHZnx4',
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