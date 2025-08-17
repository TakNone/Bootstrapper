# monoForumDialog

**Layer** : 211

```tl
monoForumDialog#64407ea7 flags:# unread_mark:flags.3?true nopaid_messages_exception:flags.4?true peer:Peer top_message:int read_inbox_max_id:int read_outbox_max_id:int unread_count:int unread_reactions_count:int draft:flags.1?DraftMessage = SavedDialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **unread_mark** | [`flags.3?true`](type/true) | NOTHING |
| **nopaid_messages_exception** | [`flags.4?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>top_message</mark> | [`int`](type/int) | NOTHING |
| <mark>read_inbox_max_id</mark> | [`int`](type/int) | NOTHING |
| <mark>read_outbox_max_id</mark> | [`int`](type/int) | NOTHING |
| <mark>unread_count</mark> | [`int`](type/int) | NOTHING |
| <mark>unread_reactions_count</mark> | [`int`](type/int) | NOTHING |
| **draft** | [`flags.1?DraftMessage`](type/DraftMessage) | NOTHING |

---

## Type

[SavedDialog](type/SavedDialog)

---

## Example

```php
$savedDialog = $client->monoForumDialog(
	unread_mark : true,
	nopaid_messages_exception : true,
	peer : $client->peerUser(
		user_id : 2907034498405892588,
	),
	top_message : 66,
	read_inbox_max_id : 48,
	read_outbox_max_id : 83,
	unread_count : 10,
	unread_reactions_count : 50,
	draft : $client->draftMessageEmpty(
		date : 45,
	),
);
```