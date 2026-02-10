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
	msg_id : 11,
	list : array(
		$client->todoItem(
			id : 11,
			title : $client->textWithEntities(
				text : '1f4H2osqD63GlnSW',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 82,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 22,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 72,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 92,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 96,
						language : '3Uy8HcIPNRGS9B6h',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 22,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : 4359167620956421099,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 2,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 61,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 17,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 84,
						document_id : 5059386191687534654,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 21,
					),
				),
			),
		),
	),
);
```