# messages.hideChatJoinRequest

**Description** : *Dismiss or approve a chat join request related to a specific chat or channel*

**Layer** : 211

```tl
messages.hideChatJoinRequest#7fe7e815 flags:# approved:flags.0?true peer:InputPeer user_id:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **approved** | [`flags.0?true`](type/true) | Whether to dismiss or approve the chat join request » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat or channel |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user whose join request » should be dismissed or approved |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_TOO_MUCH** | `400` | You have joined too many channels/supergroups |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **HIDE_REQUESTER_MISSING** | `400` | The join request was missing or was already handled |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ALREADY_PARTICIPANT** | `400` | The user is already in the group |
| **USER_CHANNELS_TOO_MUCH** | `403` | One of the users you tried to add is already in too many channels/supergroups |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$updates = $client->messages->hideChatJoinRequest(
	approved : true,
	peer : $client->inputPeerEmpty(),
	user_id : $client->inputUserEmpty(),
);
```