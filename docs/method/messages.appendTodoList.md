# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 229

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
	msg_id : 51,
	list : array(
		$client->todoItem(
			id : 65,
			title : $client->textWithEntities(
				text : 'Ih4MgudjTpHGytx2',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 39,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 74,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 36,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 45,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 7,
						language : 'lqdTk9sZGofNA475',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 57,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -6348249060085204386,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 4,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 62,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 21,
						document_id : -7132083212213493288,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 24,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 38,
						date : 95,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 59,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 34,
						old_text : 'a6rICklMeSYdHbtD',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 20,
					),
				),
			),
		),
	),
);
```