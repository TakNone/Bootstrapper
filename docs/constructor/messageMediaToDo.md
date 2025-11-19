# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 218

```tl
messageMediaToDo#8a53b014 flags:# todo:TodoList completions:flags.0?Vector<TodoCompletion> = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
			text : 'PQxprht9w86XBFI0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 32,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 25,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 38,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 96,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 90,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 76,
					language : 'KLFkZSMqlvVdUyI0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : 1138031758878529592,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 32,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 80,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 74,
					document_id : 4418814026627911617,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 90,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 57,
				title : $client->textWithEntities(
					text : 'DzWJFOGxRSfqrcZl',
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
			id : 7,
			completed_by : $client->peerUser(
				user_id : 432278158038841048,
			),
			date : 33,
		),
	),
);
```