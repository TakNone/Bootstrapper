# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 233

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
			text : 'uoQ7ETiNRtBVf2bH',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 93,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 45,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 4,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 44,
					language : 'zoWZvTORsYkxtcB2',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : -3157919237384734286,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 15,
					document_id : -7453111374058562993,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 35,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 20,
					date : 22,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 35,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 25,
					old_text : '5cUGwDOVdZNEmt3v',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 13,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 25,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 24,
				title : $client->textWithEntities(
					text : 'p8m9JawE56ZWXRMf',
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
	completions : array(
		$client->todoCompletion(
			id : 94,
			completed_by : $client->peerUser(
				user_id : -7142024195520680287,
			),
			date : 91,
		),
	),
);
```