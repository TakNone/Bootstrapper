# messages.deleteChatUser

**Description** : *Deletes a user from a chat and sends a service message on it*

**Layer** : 214

```tl
messages.deleteChatUser#a2185cab flags:# revoke_history:flags.0?true chat_id:long user_id:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoke_history** | [`flags.0?true`](type/true) | Remove the entire chat history of the specified user in this chat |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID to be deleted |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_NOT_PARTICIPANT** | `400` | You're not a member of this supergroup/channel |

---

## Example

```php
$updates = $client->messages->deleteChatUser(
	revoke_history : true,
	chat_id : -3976900657333383686,
	user_id : $client->inputUserEmpty(),
);
```