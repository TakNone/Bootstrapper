# dialog

**Description** : *Chat*

**Layer** : 225

```tl
dialog#fc89f7f3 flags:# pinned:flags.2?true unread_mark:flags.3?true view_forum_as_messages:flags.6?true peer:Peer top_message:int read_inbox_max_id:int read_outbox_max_id:int unread_count:int unread_mentions_count:int unread_reactions_count:int unread_poll_votes_count:int notify_settings:PeerNotifySettings pts:flags.0?int draft:flags.1?DraftMessage folder_id:flags.4?int ttl_period:flags.5?int = Dialog;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Is the dialog pinned |
| **unread_mark** | [`flags.3?true`](type/true) | Whether the chat was manually marked as unread |
| **view_forum_as_messages** | [`flags.6?true`](type/true) | Users may also choose to display messages from all topics of a forum as if they were sent to a normal group, using a "View as messages" setting in the local client.  This setting only affects the current account, and is synced to other logged in sessions using the channels.toggleViewForumAsMessages method; invoking this method will update the value of this flag |
| <mark>peer</mark> | [`Peer`](type/Peer) | The chat |
| <mark>top_message</mark> | [`int`](type/int) | The latest message ID |
| <mark>read_inbox_max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |
| <mark>read_outbox_max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>unread_mentions_count</mark> | [`int`](type/int) | Number of unread mentions |
| <mark>unread_reactions_count</mark> | [`int`](type/int) | Number of unread reactions to messages you sent |
| <mark>unread_poll_votes_count</mark> | [`int`](type/int) | NOTHING |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **pts** | [`flags.0?int`](type/int) | PTS |
| **draft** | [`flags.1?DraftMessage`](type/DraftMessage) | Message draft |
| **folder_id** | [`flags.4?int`](type/int) | Peer folder ID, for more info click here |
| **ttl_period** | [`flags.5?int`](type/int) | Time-to-live of all messages sent in this dialog |

---

## Type

[Dialog](type/Dialog)

---

## Example

```php
$dialog = $client->dialog(
	pinned : true,
	unread_mark : true,
	view_forum_as_messages : true,
	peer : $client->peerUser(
		user_id : 8146259713327028175,
	),
	top_message : 63,
	read_inbox_max_id : 82,
	read_outbox_max_id : 76,
	unread_count : 95,
	unread_mentions_count : 82,
	unread_reactions_count : 14,
	unread_poll_votes_count : 65,
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 8,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : false,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	pts : 3,
	draft : $client->draftMessageEmpty(
		date : 10,
	),
	folder_id : 70,
	ttl_period : 20,
);
```