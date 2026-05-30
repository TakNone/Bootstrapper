# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 225

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
			text : 'D3UsP1JAcXT9MptW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 77,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 39,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'aktGo69HNYIyTCiU',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : 2828111952544073899,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 98,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 66,
					document_id : -2275122692932974288,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 79,
					date : 49,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 33,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 98,
					old_text : 'dsGfJjoaHPTYm1Mp',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 67,
				),
			),
		),
		list : array(
			$client->todoItem(
				id : 83,
				title : $client->textWithEntities(
					text : 'yNTFdfEj1aVnCpW4',
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
			id : 26,
			completed_by : $client->peerUser(
				user_id : -8585912040496318054,
			),
			date : 40,
		),
	),
);
```