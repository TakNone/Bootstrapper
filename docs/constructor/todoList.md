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
		text : '0ydp2u5fwRWZLAMQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 9,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 72,
				language : 'orHNPT8p17EJgtOm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : -1482504254856323232,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 0,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 6,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 2227829031756593547,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 87,
			title : $client->textWithEntities(
				text : 'VCr49i8zaqQbIsyv',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 17,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 23,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 62,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 26,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'UdwnAJFRLNbmyMOr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 57,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : 6597524172568779216,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 25,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 37,
						document_id : -8093882219535320220,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 18,
					),
				),
			),
		),
	),
);
```