# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 222

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
			text : 'jXwF4VpA5yLO6vIz',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 70,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 88,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 69,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 91,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 7,
					language : 'FAvu9XJNSdhflj84',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : -1381461335216469958,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 72,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 90,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 87,
					document_id : -3319922514289334743,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 27,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 69,
				title : $client->textWithEntities(
					text : 'npkMGOlPUIy6g5QD',
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
	completions : array(
		$client->todoCompletion(
			id : 54,
			completed_by : $client->peerUser(
				user_id : -7285983359970818019,
			),
			date : 3,
		),
	),
);
```