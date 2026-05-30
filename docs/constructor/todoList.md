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
		text : 'xpyoUFmQ5vkjla09',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 82,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 33,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 77,
				language : 'h96kF1SmgKD4uTNX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : -4098282620776643026,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 27,
				document_id : -224520133895177891,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 92,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 92,
			title : $client->textWithEntities(
				text : 'CXQBS9ENvZjKJi7q',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 96,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 81,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 54,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 24,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 35,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 89,
						language : 'tRlKcmCTLGQ0FMiq',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 0,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : -3580403987442595434,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 33,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 67,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 47,
						document_id : 3095901168173861893,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 67,
					),
				),
			),
		),
	),
);
```