# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 233

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
	msg_id : 50,
	list : array(
		$client->todoItem(
			id : 3,
			title : $client->textWithEntities(
				text : 'l21NEHdzZyM5T6Yi',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 35,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 2,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 50,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 12,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 88,
						language : 'mEK81LQhGx2j6Fs7',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 51,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : 3151281837943013256,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 59,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 82,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 80,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : 1474396946134248249,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 74,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 28,
						date : 38,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 55,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 93,
						old_text : 'L62tCnrJT3SmGUjH',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 93,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 10,
					),
				),
			),
		),
	),
);
```