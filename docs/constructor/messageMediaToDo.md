# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 229

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
			text : 'UOFnRLPA4fVbuavY',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 38,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 30,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 88,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 75,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 14,
					language : 'lBh1YDvSE32n4NZm',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 89,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : -490771403095893067,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 26,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 38,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 66,
					document_id : -3039184586701375334,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 65,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 7,
					date : 93,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 35,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 81,
					old_text : '2MPxCbuVJ0lvmsiK',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 38,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 79,
				title : $client->textWithEntities(
					text : 'ycXgJQTdHliZnq2B',
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
			id : 18,
			completed_by : $client->peerUser(
				user_id : -2173939605293987650,
			),
			date : 48,
		),
	),
);
```