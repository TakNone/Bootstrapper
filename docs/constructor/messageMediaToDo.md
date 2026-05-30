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
			text : 'kucRlth50LAQ8Nf7',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 88,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 34,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 69,
					language : 'BoWgE18RfAhQLebt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : -8072706937397264249,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 80,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 24,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 68,
					document_id : -6567668803113061359,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 85,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 16,
				title : $client->textWithEntities(
					text : 'EvnDdoMliQy9h65O',
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
			id : 48,
			completed_by : $client->peerUser(
				user_id : -3346126995273679143,
			),
			date : 89,
		),
	),
);
```