# messages.getFullChat

**Description** : *Get full info about a basic group*

**Layer** : 216

```tl
messages.getFullChat#aeb00b34 chat_id:long = messages.ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Basic group ID |

---

## Result

[messages.ChatFull](type/messages.ChatFull)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesChatFull = $client->messages->getFullChat(
	chat_id : -4801265953677579911,
);
```