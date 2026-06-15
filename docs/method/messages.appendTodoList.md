# messages.appendTodoList

**Description** : *Appends one or more items to a todo list &raquo;*

**Layer** : 227

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
	msg_id : 61,
	list : array(
		$client->todoItem(
			id : 62,
			title : $client->textWithEntities(
				text : 'NoeRbz1hpW5HFwM4',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 76,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 93,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 30,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 4,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 53,
						language : 'Bch9p84DYOfgWZbU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 21,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : -5975060026494356476,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 100,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 32,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 27,
						document_id : 7290283197793043762,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 89,
						date : 72,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 5,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 73,
						old_text : 'YfrZeAvUyj3EzHoB',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 89,
					),
				),
			),
		),
	),
);
```