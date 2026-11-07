# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 229

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
			text : 'RMbCGSiJl1vNoyKE',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 24,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 69,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 51,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 14,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'JYiSlt3Fshpv7Uwo',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 57,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 23,
					user_id : -7605887074318668403,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 37,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 67,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 54,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 87,
					document_id : 8656598558397673525,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 27,
					date : 38,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 4,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 11,
					old_text : '7vh8mUKZiVFzGJA1',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 30,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 50,
				title : $client->textWithEntities(
					text : '6LnzW7EeR3QauyVt',
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