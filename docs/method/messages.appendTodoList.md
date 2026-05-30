# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 225

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
	msg_id : 97,
	list : array(
		$client->todoItem(
			id : 57,
			title : $client->textWithEntities(
				text : 'AkbVT2iYPQhnW8wE',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 97,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 39,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 86,
						language : 'JfIa2CSkbdvwyL98',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : -7412032727855796626,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 22,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 42,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 68,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 14,
						document_id : -1957256450596781156,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 44,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 4,
						date : 77,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 87,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 93,
						old_text : 'bUuB5wRVf4jzCdMX',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 75,
					),
				),
			),
		),
	),
);
```