# messages.getMessageEditData

**Description** : *Find out if a media message&#039;s caption can be edited*

**Layer** : 216

```tl
messages.getMessageEditData#fda68d36 peer:InputPeer id:int = messages.MessageEditData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the media was sent |
| <mark>id</mark> | [`int`](type/int) | ID of message |

---

## Result

[messages.MessageEditData](type/messages.MessageEditData)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **MESSAGE_AUTHOR_REQUIRED** | `403` | Message author required |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesMessageEditData = $client->messages->getMessageEditData(
	peer : $client->inputPeerEmpty(),
	id : 81,
);
```