# messages.getOutboxReadDate

**Description** : *Get the exact read date of one of our messages, sent to a private chat with another user*

**Layer** : 218

```tl
messages.getOutboxReadDate#8c4bfe5d peer:InputPeer msg_id:int = OutboxReadDate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The user to whom we sent the message |
| <mark>msg_id</mark> | [`int`](type/int) | The message ID |

---

## Result

[OutboxReadDate](type/OutboxReadDate)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MESSAGE_NOT_READ_YET** | `400` | The specified message wasn't read yet |
| **MESSAGE_TOO_OLD** | `400` | The message is too old, the requested information is not available |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |
| **YOUR_PRIVACY_RESTRICTED** | `403` | You cannot fetch the read date of this message because you have disallowed other users to do so for your messages; to fix, allow other users to see your exact last online date OR purchase a Telegram Premium subscription |

---

## Example

```php
$outboxReadDate = $client->messages->getOutboxReadDate(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 35,
);
```