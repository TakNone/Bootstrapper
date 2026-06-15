# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 227

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
		text : 'kn5pebHFs8x27ENP',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 83,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 41,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : 'l9q5VOQcygTaFHtr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 13,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : 1978788377058460421,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 97,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 91,
				document_id : -5884510604404342732,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 41,
				date : 76,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 5,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 86,
				old_text : 'P8u4AkQ7CtrEJ32a',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 37,
			title : $client->textWithEntities(
				text : 'ilDTKkM8jsWyr3aV',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 34,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 76,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 97,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 17,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 62,
						language : 'oLw7ncqUIPKekFdR',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 8,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : 5689839131703156303,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 13,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 84,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 92,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 79,
						document_id : -8665935494662205889,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
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
						date : 50,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 50,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 82,
						old_text : 'jaxGPFovc83g1Dew',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 4,
					),
				),
			),
		),
	),
);
```