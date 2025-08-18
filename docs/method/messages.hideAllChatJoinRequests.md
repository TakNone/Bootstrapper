# messages.hideAllChatJoinRequests

**Description** : *Dismiss or approve all join requests related to a specific chat or channel*

**Layer** : 211

```tl
messages.hideAllChatJoinRequests#e085f4ea flags:# approved:flags.0?true peer:InputPeer link:flags.1?string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **approved** | [`flags.0?true`](type/true) | Whether to dismiss or approve all chat join requests » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat or channel |
| **link** | [`flags.1?string`](type/string) | Only dismiss or approve join requests » initiated using this invite link |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_TOO_MUCH** | `400` | You have joined too many channels/supergroups |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **HIDE_REQUESTER_MISSING** | `400` | The join request was missing or was already handled |
| **INVITE_HASH_EXPIRED** | `400` | The invite link has expired |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_CHANNELS_TOO_MUCH** | `400` | One of the users you tried to add is already in too many channels/supergroups |

---

## Example

```php
$updates = $client->messages->hideAllChatJoinRequests(
	approved : true,
	peer : $client->inputPeerEmpty(),
	link : '82ZW975T3SVPdGMD',
);
```