# channels.editBanned

**Description** : *Ban/unban/kick a user in a supergroup/channel*

**Layer** : 211

```tl
channels.editBanned#96e6cd81 channel:InputChannel participant:InputPeer banned_rights:ChatBannedRights = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup/channel |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | Participant to ban |
| <mark>banned_rights</mark> | [`ChatBannedRights`](type/ChatBannedRights) | The banned rights |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BANNED_RIGHTS_INVALID** | `406` | You provided some invalid flags in the banned rights |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PARTICIPANT_ID_INVALID** | `400` | The specified participant ID is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ADMIN_INVALID** | `400` | You're not an admin |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$updates = $client->channels->editBanned(
	channel : $client->inputChannelEmpty(),
	participant : $client->inputPeerEmpty(),
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
		until_date : 95,
	),
);
```