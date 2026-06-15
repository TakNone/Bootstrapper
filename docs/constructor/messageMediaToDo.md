# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 227

```tl
messageMediaToDo#8a53b014 flags:# todo:TodoList completions:flags.0?Vector<TodoCompletion> = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>todo</mark> | [`TodoList`](type/TodoList) | The todo list |
| **completions** | [`flags.0?Vector<TodoCompletion>`](type/TodoCompletion) | Completed items |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaToDo(
	todo : $client->todoList(
		others_can_append : true,
		others_can_complete : true,
		title : $client->textWithEntities(
			text : '6m5cG9zowJSIu2Cf',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 70,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 57,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 72,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 2,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 62,
					language : '9YtKsQVILxC4GqvH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 31,
					user_id : -1358661844370235227,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 72,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 24,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 34,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 70,
					document_id : -4466615454921428657,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 94,
					date : 25,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 31,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 38,
					old_text : 'lWiZNCGspeEmT5Af',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 78,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 5,
				title : $client->textWithEntities(
					text : '2eFuk6tCmTzHJbdx',
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
	completions : array(
		$client->todoCompletion(
			id : 1,
			completed_by : $client->peerUser(
				user_id : 440992576554003830,
			),
			date : 43,
		),
	),
);
```