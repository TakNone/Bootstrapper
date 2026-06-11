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
		text : 'mKYh92OLtIT8dGjD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 23,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 38,
				language : 'I2rA43f8tiW7xlpY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 9176002733419684969,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 59,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 60,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 83,
				document_id : 741585413385697332,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 36,
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
				date : 13,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 6,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 9,
				old_text : 'btgumVew9Fh7COPl',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 29,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 2,
			title : $client->textWithEntities(
				text : '1D8cm9rWjFSk3BR6',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 9,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 7,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 31,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 21,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 31,
						language : 'vq18KxT7peOLHQrI',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 1,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 8,
						user_id : -8670225418686547928,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 33,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 31,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 28,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 87,
						document_id : 7831358436861889731,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 40,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 1,
						date : 68,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 83,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 44,
						old_text : 'pbjgd7VTRHFevJ3m',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 70,
					),
				),
			),
		),
	),
);
```