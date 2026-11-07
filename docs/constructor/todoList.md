# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 233

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
		text : 'uvmbKh7CVy6EeIH2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 45,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 62,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : '3n658Pr7u4tczyBS',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : 5630859203544315248,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 56,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 29,
				document_id : -8296955133593114733,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
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
				date : 76,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 62,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 58,
				old_text : 'HShcAlZDbiCpOUjx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 76,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 1,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 19,
			title : $client->textWithEntities(
				text : 'CmGoWD1PifhrsZy0',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 29,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 7,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 63,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 17,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 77,
						language : 'zsl2UQHNVDIvpdE0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 44,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : 4931111137281494122,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 54,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 77,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 40,
						document_id : 5445326373244428796,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 91,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 37,
						date : 72,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 74,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 88,
						old_text : 'ZQL6nbotpgulzF4s',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 19,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 46,
					),
				),
			),
		),
	),
);
```