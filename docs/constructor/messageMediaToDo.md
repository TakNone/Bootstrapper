# messageMediaToDo

**Description** : *Represents a todo list &raquo;*

**Layer** : 216

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
			text : 'SrpziqVgWfDAjQYC',
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
		list : array(
			$client->todoItem(
				id : 15,
				title : $client->textWithEntities(...),
			),
		),
	),
	completions : array(
		$client->todoCompletion(
			id : 31,
			completed_by : 3289836740048156604,
			date : 13,
		),
	),
);
```