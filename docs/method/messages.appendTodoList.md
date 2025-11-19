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
	msg_id : 76,
	list : array(
		$client->todoItem(
			id : 35,
			title : $client->textWithEntities(
				text : 'NbfDhW59tmC4zLM8',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 33,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 64,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 81,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 34,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 55,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 60,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 54,
						language : 'jVe1dZJTDEQmnw9H',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 4,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : -8730782608839433003,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 20,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 58,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 9,
						document_id : -8119523209855050541,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 37,
					),
				),
			),
		),
	),
);
```