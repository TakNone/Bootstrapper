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
		text : 'UwzgTfs3iKVXJ5OG',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 1,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 90,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'TOSDpM3tYdN1weKL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : 5772646425364358607,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 27,
				document_id : 6147248466046035769,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
		),
	),
	list : array(
		$client->todoItem(
			id : 52,
			title : $client->textWithEntities(
				text : 'BNY1K6jEgrC7I4uS',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 68,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 23,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 24,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : 'ksjxoliygZANFrn4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 67,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 88,
						user_id : 8930619613328333652,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 73,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 81,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 79,
						document_id : 1357705082288952731,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 69,
					),
				),
			),
		),
	),
);
```