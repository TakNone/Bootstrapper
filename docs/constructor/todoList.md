# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 225

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
		text : 'YBQhrSV7CbWFd1Ha',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 29,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 51,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 38,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 23,
				language : 'Eh8lXfye4miFHusL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 64,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : -278535296708805484,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -311722009717523443,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 84,
				date : 19,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 94,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 59,
				old_text : 'WpOCcs23K0ngekR7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 0,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 52,
			title : $client->textWithEntities(
				text : 'M43DF0srtmnJQKHb',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 11,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 79,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : 'AMN8ngxufHcIjtdp',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 54,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 33,
						user_id : -546815754779498038,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 69,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 81,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 89,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 23,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 6,
						document_id : 8939303401066202083,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 99,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 83,
						date : 99,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 83,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 95,
						old_text : '5B38Ue7j0PvV2qQ9',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 3,
					),
				),
			),
		),
	),
);
```