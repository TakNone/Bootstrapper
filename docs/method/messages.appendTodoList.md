# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 218

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
	msg_id : 33,
	list : array(
		$client->todoItem(
			id : 7,
			title : $client->textWithEntities(
				text : 'k2pLCbXZYJiK9Ww7',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 42,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 33,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 4,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 3,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 75,
						language : '1FRBqisagoVNbdYw',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 39,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : -7716198553079580249,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 33,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 98,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : -5547667501303167957,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
					),
				),
			),
		),
	),
);
```