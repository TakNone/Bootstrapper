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
			text : '7KYfhn5ZSG8XeHEt',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 100,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 12,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 43,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 90,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 4,
					language : 'r3Mh2JxPBqXCi1SN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 85,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : 2190940295638548778,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 23,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : -6246098360828116459,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 61,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 32,
					date : 49,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 13,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 27,
					old_text : 'OqEvyAG7H6aj1Xn5',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 35,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 96,
				title : $client->textWithEntities(
					text : 'TgIOvUXr5HQlLKjp',
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