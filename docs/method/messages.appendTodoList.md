# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 222

```tl
messages.appendTodoList#21a61057 peer:InputPeer msg_id:int list:Vector<TodoItem> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the todo list was posted |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message with the todo list |
| <mark>list</mark> | [`Vector<TodoItem>`](type/TodoItem) | Items to append |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TODO_ITEM_DUPLICATE** | `400` | Duplicate checklist items detected |
| **TODO_NOT_MODIFIED** | `400` | No todo items were specified, so no changes were made to the todo list |

---

## Example

```php
$updates = $client->messages->appendTodoList(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 83,
	list : array(
		$client->todoItem(
			id : 97,
			title : $client->textWithEntities(
				text : 'XOLb562qNPZJheW3',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 34,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 9,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 50,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 88,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 0,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 47,
						language : '9K0csr3nwXuUZI1G',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 43,
						user_id : -6803382757051339419,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 49,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 50,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 67,
						document_id : -1631372689711345076,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 79,
					),
				),
			),
		),
	),
);
```