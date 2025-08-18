# messages.readDiscussion

**Description** : *Mark a thread as read*

**Layer** : 211

```tl
messages.readDiscussion#f731a9f4 peer:InputPeer msg_id:int read_max_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Group ID |
| <mark>msg_id</mark> | [`int`](type/int) | ID of message that started the thread |
| <mark>read_max_id</mark> | [`int`](type/int) | ID up to which thread messages were read |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->readDiscussion(
	peer : $client->inputPeerEmpty(),
	msg_id : 87,
	read_max_id : 8,
);
```