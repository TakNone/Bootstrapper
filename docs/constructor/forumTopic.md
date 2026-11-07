# forumTopic

**Description** : *Represents a forum topic*

**Layer** : 229

```tl
forumTopic#fcdad815 flags:# my:flags.1?true closed:flags.2?true pinned:flags.3?true short:flags.5?true hidden:flags.6?true title_missing:flags.7?true id:int date:int peer:Peer title:string icon_color:int icon_emoji_id:flags.0?long top_message:int read_inbox_max_id:int read_outbox_max_id:int unread_count:int unread_mentions_count:int unread_reactions_count:int unread_poll_votes_count:int from_id:Peer notify_settings:PeerNotifySettings draft:flags.4?DraftMessage = ForumTopic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **my** | [`flags.1?true`](type/true) | Whether the topic was created by the current user |
| **closed** | [`flags.2?true`](type/true) | Whether the topic is closed (no messages can be sent to it) |
| **pinned** | [`flags.3?true`](type/true) | Whether the topic is pinned |
| **short** | [`flags.5?true`](type/true) | Whether this constructor is a reduced version of the full topic information. If set, only the my, closed, id, date, title, icon_color, icon_emoji_id and from_id parameters will contain valid information. Reduced info is usually only returned in topic-related admin log events » and in the messages.channelMessages constructor: if needed, full information can be fetched using messages.getForumTopicsByID |
| **hidden** | [`flags.6?true`](type/true) | Whether the topic is hidden (only valid for the "General" topic, id=1) |
| **title_missing** | [`flags.7?true`](type/true) | If set, the topic has no user-defined title, can only be set for the per-user topics of bot forums; if this field is set, the topic title likely needs to be changed by the bot |
| <mark>id</mark> | [`int`](type/int) | Topic ID |
| <mark>date</mark> | [`int`](type/int) | Topic creation date |
| <mark>peer</mark> | [`Peer`](type/Peer) | Contains the supergroup/private chat where the topic is located.  This field is useful especially when this object is returned by methods like messages.getMessages, which can return messages and forum topics belonging to different (private chat) peers in the same method call, making it impossible to tell the topic's peer based on the method call parameters or surrounding context |
| <mark>title</mark> | [`string`](type/string) | Topic title |
| <mark>icon_color</mark> | [`int`](type/int) | If no custom emoji icon is specified, specifies the color of the fallback topic icon (RGB), one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F |
| **icon_emoji_id** | [`flags.0?long`](type/long) | ID of the custom emoji used as topic icon |
| <mark>top_message</mark> | [`int`](type/int) | ID of the last message that was sent to this topic |
| <mark>read_inbox_max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |
| <mark>read_outbox_max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |
| <mark>unread_count</mark> | [`int`](type/int) | Number of unread messages |
| <mark>unread_mentions_count</mark> | [`int`](type/int) | Number of unread mentions |
| <mark>unread_reactions_count</mark> | [`int`](type/int) | Number of unread reactions to messages you sent |
| <mark>unread_poll_votes_count</mark> | [`int`](type/int) | Number of unread votes cast in non-anonymous polls » owned by the user in this forum topic |
| <mark>from_id</mark> | [`Peer`](type/Peer) | ID of the peer that created the topic |
| <mark>notify_settings</mark> | [`PeerNotifySettings`](type/PeerNotifySettings) | Notification settings |
| **draft** | [`flags.4?DraftMessage`](type/DraftMessage) | Message draft |

---

## Type

[ForumTopic](type/ForumTopic)

---

## Example

```php
$forumTopic = $client->forumTopic(
	my : true,
	closed : true,
	pinned : true,
	short : true,
	hidden : true,
	title_missing : true,
	id : 91,
	date : 75,
	peer : $client->peerUser(
		user_id : -8898648754464222508,
	),
	title : 'm6LNQyUrkalDC1cK',
	icon_color : 84,
	icon_emoji_id : -2097490417482632348,
	top_message : 60,
	read_inbox_max_id : 7,
	read_outbox_max_id : 68,
	unread_count : 1,
	unread_mentions_count : 28,
	unread_reactions_count : 63,
	unread_poll_votes_count : 70,
	from_id : $client->peerUser(
		user_id : 432391573380424065,
	),
	notify_settings : $client->peerNotifySettings(
		show_previews : true,
		silent : true,
		mute_until : 18,
		ios_sound : $client->notificationSoundDefault(),
		android_sound : $client->notificationSoundDefault(),
		other_sound : $client->notificationSoundDefault(),
		stories_muted : true,
		stories_hide_sender : true,
		stories_ios_sound : $client->notificationSoundDefault(),
		stories_android_sound : $client->notificationSoundDefault(),
		stories_other_sound : $client->notificationSoundDefault(),
	),
	draft : $client->draftMessageEmpty(
		date : 42,
	),
);
```