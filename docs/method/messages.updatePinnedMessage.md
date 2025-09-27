# messages.updatePinnedMessage

**Description** : *Pin a message*

**Layer** : 214

```tl
messages.updatePinnedMessage#d2aaf7ec flags:# silent:flags.0?true unpin:flags.1?true pm_oneside:flags.2?true peer:InputPeer id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.0?true`](type/true) | Pin the message silently, without triggering a notification |
| **unpin** | [`flags.1?true`](type/true) | Whether the message should unpinned or pinned |
| **pm_oneside** | [`flags.2?true`](type/true) | Whether the message should only be pinned on the local side of a one-to-one chat |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where to pin the message |
| <mark>id</mark> | [`int`](type/int) | The message to pin or unpin |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_ONESIDE_NOT_AVAIL** | `400` | Bots can't pin messages in PM just for themselves |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PIN_RESTRICTED** | `400` | You can't pin messages |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$updates = $client->messages->updatePinnedMessage(
	silent : true,
	unpin : true,
	pm_oneside : true,
	peer : $client->inputPeerEmpty(),
	id : 61,
);
```