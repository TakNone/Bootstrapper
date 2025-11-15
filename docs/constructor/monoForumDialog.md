# monoForumDialog

**Description** : *Represents a monoforum topic &raquo;*

**Layer** : 218

```tl
monoForumDialog#64407ea7 flags:# unread_mark:flags.3?true nopaid_messages_exception:flags.4?true peer:Peer top_message:int read_inbox_max_id:int read_outbox_max_id:int unread_count:int unread_reactions_count:int draft:flags.1?DraftMessage = SavedDialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **unread_mark** | [`flags.3?true`](type/true) | Whether this topic has a manually set (with messages.markDialogUnread) unread mark |
| **nopaid_messages_exception** | [`flags.4?true`](type/true) | If set, an admin has exempted this peer from payment to send messages using account.toggleNoPaidMessagesException |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer associated to the topic, AKA the topic ID |
| <mark>top_message</mark> | [`int`](type/int) | The latest message ID |
| <mark>read_inbox_max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |
| <mark>read_outbox_max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>unread_reactions_count</mark> | [`int`](type/int) | Number of unread reactions |
| **draft** | [`flags.1?DraftMessage`](type/DraftMessage) | A pending message draft |

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
		user_id : 1808051776796734465,
	),
	top_message : 11,
	read_inbox_max_id : 7,
	read_outbox_max_id : 19,
	unread_count : 57,
	unread_reactions_count : 11,
	draft : $client->draftMessageEmpty(
		date : 15,
	),
);
```