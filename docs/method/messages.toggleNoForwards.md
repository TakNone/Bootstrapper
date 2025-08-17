# messages.toggleNoForwards

**Description** : *Enable or disable content protection on a channel or chat*

**Layer** : 211

```tl
messages.toggleNoForwards#b11eafa2 peer:InputPeer enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat or channel |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Enable or disable content protection |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->toggleNoForwards(
	peer : $client->inputPeerEmpty(),
	enabled : $client->boolFalse(),
);
```