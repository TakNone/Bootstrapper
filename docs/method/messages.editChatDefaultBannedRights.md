# messages.editChatDefaultBannedRights

**Description** : *Edit the default banned rights of a channel/supergroup/group*

**Layer** : 218

```tl
messages.editChatDefaultBannedRights#a5866b41 peer:InputPeer banned_rights:ChatBannedRights = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |
| <mark>banned_rights</mark> | [`ChatBannedRights`](type/ChatBannedRights) | The new global rights |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BANNED_RIGHTS_INVALID** | `400` | You provided some invalid flags in the banned rights |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **UNTIL_DATE_INVALID** | `400` | Invalid until date provided |

---

## Example

```php
$updates = $client->messages->editChatDefaultBannedRights(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
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
		until_date : 20,
	),
);
```