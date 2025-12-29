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
	msg_id : 99,
	list : array(
		$client->todoItem(
			id : 15,
			title : $client->textWithEntities(
				text : 'TAwtsLMlrJI6C8GQ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 78,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 39,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 77,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 98,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'fQyxuYI4rPKZ6vT2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 6,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : 6093066192739108682,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 59,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 45,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 97,
						document_id : 7540811583070305086,
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