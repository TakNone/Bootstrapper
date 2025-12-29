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
			text : 'xvNQEFVqiJHsehwk',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 80,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 27,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 57,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 96,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 34,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 68,
					language : 'SPnUaE5BsKVvWYcL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : -979359834172065690,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 50,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 29,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 96,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : -1162963559156655137,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 67,
				title : $client->textWithEntities(
					text : 'jGXPsk1Ca25TnRq4',
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
			id : 42,
			completed_by : $client->peerUser(
				user_id : -1914782774477798704,
			),
			date : 3,
		),
	),
);
```