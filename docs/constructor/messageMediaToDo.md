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
			text : 'xERzA9jG02POyqkJ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 36,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 40,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 90,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : 'a1mlou92BX6PfhwY',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 82,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : 5780276964484484689,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 29,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 0,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : -222846562264578297,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 83,
					date : 14,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 78,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 14,
					old_text : 'DFsJEalZKeqpv1bX',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 46,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 54,
				title : $client->textWithEntities(
					text : 'E7SX5p0DbytZGc4L',
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
			id : 44,
			completed_by : $client->peerUser(
				user_id : 7195455223976355925,
			),
			date : 60,
		),
	),
);
```