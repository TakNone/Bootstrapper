# messages.startBot

**Description** : *Start a conversation with a bot using a deep linking parameter*

**Layer** : 216

```tl
messages.startBot#e6df7378 bot:InputUser peer:InputPeer random_id:long start_param:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat where to start the bot, can be the bot's private chat or a group |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid resending the same message |
| <mark>start_param</mark> | [`string`](type/string) | Deep linking parameter |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |
| **START_PARAM_EMPTY** | `400` | The start parameter is empty |
| **START_PARAM_INVALID** | `400` | Start parameter invalid |
| **START_PARAM_TOO_LONG** | `400` | Start parameter is too long |

---

## Example

```php
$updates = $client->messages->startBot(
	bot : $client->inputUserEmpty(),
	peer : $client->inputPeerEmpty(),
	random_id : -6339354951545252344,
	start_param : 'TChvGi87bDBWFEof',
);
```