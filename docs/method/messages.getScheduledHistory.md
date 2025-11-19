# messages.getScheduledHistory

**Description** : *Get scheduled messages*

**Layer** : 218

```tl
messages.getScheduledHistory#f516760b peer:InputPeer hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here. To generate the hash, populate the ids array with the id, edit_date (0 if unedited) and date (in this order) of the previously returned messages (in order, i.e. ids = [id1, (edit_date1 ?? 0), date1, id2, (edit_date2 ?? 0), date2, ...]) |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getScheduledHistory(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	hash : 0,
);
```