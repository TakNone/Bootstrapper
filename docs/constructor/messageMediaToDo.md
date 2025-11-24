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
			text : 'Hd4mqz7QBVv1UogC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 60,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 23,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 48,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'mN4j1ZnKtCcx9HaO',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 39,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 21,
					user_id : 5570231455032634407,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 69,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 33,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 93,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 28,
					document_id : 6047944080757455503,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 81,
				title : $client->textWithEntities(
					text : 'Jik4B2Inbv05Eltm',
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
			id : 72,
			completed_by : $client->peerUser(
				user_id : 6732376261254867845,
			),
			date : 57,
		),
	),
);
```