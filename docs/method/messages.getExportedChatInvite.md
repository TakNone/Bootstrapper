# messages.getExportedChatInvite

**Description** : *Get info about a chat invite*

**Layer** : 218

```tl
messages.getExportedChatInvite#73746f5c peer:InputPeer link:string = messages.ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat |
| <mark>link</mark> | [`string`](type/string) | Invite link |

---

## Result

[messages.ExportedChatInvite](type/messages.ExportedChatInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INVITE_HASH_EXPIRED** | `400` | The invite link has expired |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesExportedChatInvite = $client->messages->getExportedChatInvite(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	link : 'YEaRzcIkKiZ20v3w',
);
```