# channelParticipantBanned

**Description** : *Banned/kicked user*

**Layer** : 227

```tl
channelParticipantBanned#d5f0ad91 flags:# left:flags.0?true peer:Peer kicked_by:long date:int banned_rights:ChatBannedRights rank:flags.2?string = ChannelParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **left** | [`flags.0?true`](type/true) | Whether the user has left the group |
| <mark>peer</mark> | [`Peer`](type/Peer) | The banned peer |
| <mark>kicked_by</mark> | [`long`](type/long) | User was kicked by the specified admin |
| <mark>date</mark> | [`int`](type/int) | When did the user join the group |
| <mark>banned_rights</mark> | [`ChatBannedRights`](type/ChatBannedRights) | Banned rights |
| **rank** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[ChannelParticipant](type/ChannelParticipant)

---

## Example

```php
$channelParticipant = $client->channelParticipantBanned(
	left : true,
	peer : $client->peerUser(
		user_id : 4349863193092512847,
	),
	kicked_by : 4099198757507206956,
	date : 20,
	banned_rights : $client->chatBannedRights(
		view_messages : true,
		send_messages : true,
		send_media : true,
		send_stickers : true,
		send_gifs : true,
		send_games : true,
		send_inline : true,
		embed_links : true,
		send_polls : true,
		change_info : true,
		invite_users : true,
		pin_messages : true,
		manage_topics : true,
		send_photos : true,
		send_videos : true,
		send_roundvideos : true,
		send_audios : true,
		send_voices : true,
		send_docs : true,
		send_plain : true,
		edit_rank : true,
		send_reactions : true,
		until_date : 39,
	),
	rank : 'YdWoOTZC6FKUnbx3',
);
```