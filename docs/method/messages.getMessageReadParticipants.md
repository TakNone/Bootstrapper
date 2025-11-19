# messages.getMessageReadParticipants

**Description** : *Get which users read a specific message: only available for groups and supergroups with less than chat\_read\_mark\_size\_threshold members, read receipts will be stored for chat\_read\_mark\_expire\_period seconds after the message was sent, see client configuration for more info &raquo;*

**Layer** : 218

```tl
messages.getMessageReadParticipants#31c1c44f peer:InputPeer msg_id:int = Vector<ReadParticipantDate>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Dialog |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |

---

## Result

[Vector<ReadParticipantDate>](type/ReadParticipantDate)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_TOO_BIG** | `400` | This method is not available for groups with more than chat_read_mark_size_threshold members, see client configuration » |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **MSG_TOO_OLD** | `400` | chat_read_mark_expire_period seconds have passed since the message was sent, read receipts were deleted |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$readParticipantDate = $client->messages->getMessageReadParticipants(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 12,
);
```