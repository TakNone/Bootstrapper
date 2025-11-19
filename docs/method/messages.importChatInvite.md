# messages.importChatInvite

**Description** : *Import a chat invite and join a private chat/supergroup/channel*

**Layer** : 218

```tl
messages.importChatInvite#6c50051c hash:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`string`](type/string) | hash from a chat invite deep link |

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
| **CHAT_INVALID** | `400` | Invalid chat |
| **INVITE_HASH_EMPTY** | `400` | The invite hash is empty |
| **INVITE_HASH_EXPIRED** | `406` | The invite link has expired |
| **INVITE_HASH_INVALID** | `400` | The invite hash is invalid |
| **INVITE_REQUEST_SENT** | `400` | You have successfully requested to join this chat or channel |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STARS_PAYMENT_REQUIRED** | `400` | To import this chat invite link, you must first pay for the associated Telegram Star subscription » |
| **USERS_TOO_MUCH** | `400` | The maximum number of users has been exceeded (to create a chat, for example) |
| **USER_ALREADY_PARTICIPANT** | `400` | The user is already in the group |
| **USER_CHANNELS_TOO_MUCH** | `400` | One of the users you tried to add is already in too many channels/supergroups |

---

## Example

```php
$updates = $client->messages->importChatInvite(
	hash : 'G5Zxcy7ptmlqPeoA',
);
```