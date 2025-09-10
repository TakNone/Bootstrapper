# messages.setTyping

**Description** : *Sends a current user typing event \(see SendMessageAction for all event types\) to a conversation partner or group*

**Layer** : 214

```tl
messages.setTyping#58943ee2 flags:# peer:InputPeer top_msg_id:flags.0?int action:SendMessageAction = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Target user or group |
| **top_msg_id** | [`flags.0?int`](type/int) | Topic ID |
| <mark>action</mark> | [`SendMessageAction`](type/SendMessageAction) | Type of action |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_PEER_INVALID** | `400` | Messages can't be set to the specified peer through the current business connection |
| **BUSINESS_PEER_USAGE_MISSING** | `400` | You cannot send a message to a user through a business connection if the user hasn't recently contacted us |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |
| **USER_IS_BOT** | `400` | Bots can't send messages to other bots |

---

## Example

```php
$bool = $client->messages->setTyping(
	peer : $client->inputPeerEmpty(),
	top_msg_id : 3,
	action : $client->sendMessageTypingAction(),
);
```