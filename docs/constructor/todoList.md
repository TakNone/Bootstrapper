# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 222

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
		text : 'tm6pOquJYkESoBxR',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 11,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 67,
				language : 'ohzTDiSufgb3FQR5',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : -284934145265055780,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 57,
				document_id : -486429312161862808,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 10,
			title : $client->textWithEntities(
				text : 'uwe6bjYONI9EQaJf',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 94,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 24,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 63,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 33,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 77,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 73,
						language : 'YMFuRfr90qZIPWGN',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 54,
						user_id : 411706913272356430,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 0,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 85,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 3,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : 6149543543555936816,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 34,
					),
				),
			),
		),
	),
);
```