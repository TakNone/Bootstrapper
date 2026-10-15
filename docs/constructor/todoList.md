# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 229

```tl
todoList#49b92a26 flags:# others_can_append:flags.0?true others_can_complete:flags.1?true title:TextWithEntities list:Vector<TodoItem> = TodoList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **others_can_append** | [`flags.0?true`](type/true) | If set, users different from the creator of the list can append items to the list |
| **others_can_complete** | [`flags.1?true`](type/true) | If set, users different from the creator of the list can complete items in the list |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Title of the todo list, maximum length equal to todo_title_length_max » |
| <mark>list</mark> | [`Vector<TodoItem>`](type/TodoItem) | Items of the list |

---

## Type

[TodoList](type/TodoList)

---

## Example

```php
$todoList = $client->todoList(
	others_can_append : true,
	others_can_complete : true,
	title : $client->textWithEntities(
		text : 'CyH6lDAdtbfcE2hJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 54,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 91,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 29,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 23,
				language : 'MobdNDewfUJnACF9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 27,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : -3315730968550600951,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 84,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -3825459573676049154,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 86,
				date : 34,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 81,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 1,
				old_text : 'mQonMvSjY8TWXOEf',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 12,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 13,
			title : $client->textWithEntities(
				text : '04NnctB2ST3jmFhI',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 74,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 94,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 71,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 62,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 47,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 25,
						language : 'CNy16aQKXvV5dPbt',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 19,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 61,
						user_id : -5882721391866233266,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 14,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 8,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 96,
						document_id : -604725009085124221,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 25,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 22,
						date : 80,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 10,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 83,
						old_text : 'tiwLRD0oxsJpzGgM',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 62,
					),
				),
			),
		),
	),
);
```