# messages.createChat

**Description** : *Creates a new chat*

**Layer** : 218

```tl
messages.createChat#92ceddd4 flags:# users:Vector<InputUser> title:string ttl_period:flags.0?int = messages.InvitedUsers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | List of user IDs to be invited |
| <mark>title</mark> | [`string`](type/string) | Chat name |
| **ttl_period** | [`flags.0?int`](type/int) | Time-to-live of all messages that will be sent in the chat: once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well. You can use messages.setDefaultHistoryTTL to edit this value later |

---

## Result

[messages.InvitedUsers](type/messages.InvitedUsers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_GENERATE_FAILED** | `500` | Failure while generating the chat ID |
| **CHAT_INVALID** | `400` | Invalid chat |
| **CHAT_MEMBER_ADD_FAILED** | `400` | Could not add participants |
| **CHAT_TITLE_EMPTY** | `400` | No chat title provided |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **TTL_PERIOD_INVALID** | `400` | The specified TTL period is invalid |
| **USERS_TOO_FEW** | `400` | Not enough users (to create a chat, for example) |
| **USER_RESTRICTED** | `403` | You're spamreported, you can't create channels or chats |

---

## Example

```php
$messagesInvitedUsers = $client->messages->createChat(
	users : array($client->get_input_user(peer : '@TakNone')),
	title : 'F4Ic0AfULKBiYjx3',
	ttl_period : 26,
);
```