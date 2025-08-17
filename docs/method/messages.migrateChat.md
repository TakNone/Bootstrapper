# messages.migrateChat

**Description** : *Turn a basic group into a supergroup*

**Layer** : 211

```tl
messages.migrateChat#a2875319 chat_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Basic group to migrate |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_TOO_MUCH** | `400` | You have joined too many channels/supergroups |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_INVALID** | `500` | Invalid chat |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->migrateChat(
	chat_id : -4944707381987813027,
);
```