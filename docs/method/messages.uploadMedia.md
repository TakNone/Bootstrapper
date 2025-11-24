# messages.uploadMedia

**Description** : *Upload a file and associate it to a chat \(without actually sending it to the chat\)*

**Layer** : 218

```tl
messages.uploadMedia#14967978 flags:# business_connection_id:flags.0?string peer:InputPeer media:InputMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **business_connection_id** | [`flags.0?string`](type/string) | Whether the media will be used only in the specified business connection », and not directly by the bot |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat, can be inputPeerEmpty for bots and inputPeerSelf for users |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | File uploaded in chunks as described in files » |

---

## Result

[MessageMedia](type/MessageMedia)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_RESTRICTED** | `400` | You can't send messages in this chat, you were restricted |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **FILE_PARTS_INVALID** | `400` | The number of file parts is invalid |
| **FILE_PART_LENGTH_INVALID** | `400` | The length of a file part is invalid |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MEDIA_INVALID** | `400` | Media invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PHOTO_EXT_INVALID** | `400` | The extension of the photo is invalid |
| **PHOTO_INVALID_DIMENSIONS** | `400` | The photo dimensions are invalid |
| **PHOTO_SAVE_FILE_INVALID** | `400` | Internal issues, try again later |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **VOICE_MESSAGES_FORBIDDEN** | `400` | This user's privacy settings forbid you from sending voice messages |
| **WEBPAGE_CURL_FAILED** | `400` | Failure while fetching the webpage with cURL |

---

## Example

```php
$messageMedia = $client->messages->uploadMedia(
	business_connection_id : 'aLcKnzQ3Zwe9q7D0',
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```