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
	msg_id : 11,
	list : array(
		$client->todoItem(
			id : 66,
			title : $client->textWithEntities(
				text : 'mcltf4Cg7yRbGxUq',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 79,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 95,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 40,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 68,
						language : 'KB3Zf9hs0NQiE2pT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 75,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : 4375830784633381009,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 10,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 89,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 53,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 79,
						document_id : -4649760562684542884,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 56,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 50,
						date : 60,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 37,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 46,
						old_text : 'gTbhaln3MyZVwE04',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 38,
					),
				),
			),
		),
	),
);
```