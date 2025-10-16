# messages.addChatUser

**Description** : *Adds a user to a chat and sends a service message on it*

**Layer** : 216

```tl
messages.addChatUser#cbc6d107 chat_id:long user_id:InputUser fwd_limit:int = messages.InvitedUsers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID to be added |
| <mark>fwd_limit</mark> | [`int`](type/int) | Number of last messages to be forwarded |

---

## Result

[messages.InvitedUsers](type/messages.InvitedUsers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_GROUPS_BLOCKED** | `400` | This bot can't be added to groups |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USERS_TOO_MUCH** | `400` | The maximum number of users has been exceeded (to create a chat, for example) |
| **USER_ALREADY_PARTICIPANT** | `400` | The user is already in the group |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_IS_BLOCKED** | `400` | You were blocked by this user |
| **USER_NOT_MUTUAL_CONTACT** | `403` | The provided user is not a mutual contact |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$messagesInvitedUsers = $client->messages->addChatUser(
	chat_id : 4271499772665054456,
	user_id : $client->inputUserEmpty(),
	fwd_limit : 59,
);
```