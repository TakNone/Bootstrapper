# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 233

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
			text : '1czrR3TGHysx4BPb',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 91,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 21,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : '0K8uMF4pGVgTSt3w',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : 7769522986679592658,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 84,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : -1877893780789289104,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 62,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 54,
					date : 24,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 75,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 9,
					old_text : '84jfOYkIGvuHLmnr',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 9,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 63,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 66,
				title : $client->textWithEntities(
					text : '3GSXukVs7dPNUZzF',
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
						$client->messageEntityTonAddress(...),
					),
				),
			),
		),
	),
);
```