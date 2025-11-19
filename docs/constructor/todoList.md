# todoList

**Description** : *Represents a todo list &raquo;*

**Layer** : 218

```tl
todoList#49b92a26 flags:# others_can_append:flags.0?true others_can_complete:flags.1?true title:TextWithEntities list:Vector<TodoItem> = TodoList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		text : 'qfvpHZDj9ybekJ5t',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 67,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 2,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 46,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 67,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 15,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'cSVyjD8O4BiKF6UW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 83,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : 4978496074061091624,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 61,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 30,
				document_id : -69942500298392795,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 73,
			title : $client->textWithEntities(
				text : '9YpPmQy0EjCdOF4T',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 1,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 58,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 29,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 12,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 84,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : 'IGZ7HQSUhY3cgu80',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 27,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : 961869599606807287,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
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
						length : 31,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 80,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 48,
						document_id : -7465599054280049390,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 84,
					),
				),
			),
		),
	),
);
```