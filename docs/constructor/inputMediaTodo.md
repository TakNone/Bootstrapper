# inputMediaTodo

**Description** : *Creates a todo list &raquo;*

**Layer** : 225

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
			text : '6JuSkN9h1fPitCrX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 75,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 94,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 98,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 74,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 2,
					language : '72O9CQMmZHpXBJwl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : 7746686910218786910,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 75,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 44,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : -4648236530883028415,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 7,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 56,
					date : 63,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 50,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 38,
					old_text : 'ver7dt3sqCn2IDMw',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 90,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 77,
				title : $client->textWithEntities(
					text : 'xP1VOZFEdvuA7HlR',
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