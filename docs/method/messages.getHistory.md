# messages.getHistory

**Description** : *Returns the conversation history with one interlocutor / within a chat*

**Layer** : 211

```tl
messages.getHistory#4423e6c5 peer:InputPeer offset_id:int offset_date:int add_offset:int limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Target peer |
| <mark>offset_id</mark> | [`int`](type/int) | Only return messages starting from the specified message ID |
| <mark>offset_date</mark> | [`int`](type/int) | Only return messages sent before the specified date |
| <mark>add_offset</mark> | [`int`](type/int) | Number of list elements to be skipped, negative values are also accepted |
| <mark>limit</mark> | [`int`](type/int) | Number of results to return |
| <mark>max_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with IDs less than max_id |
| <mark>min_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with IDs more than min_id |
| <mark>hash</mark> | [`long`](type/long) | Result hash |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TAKEOUT_INVALID** | `400` | The specified takeout ID is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getHistory(
	peer : $client->inputPeerEmpty(),
	offset_id : 13,
	offset_date : 20,
	add_offset : 81,
	limit : 8,
	max_id : 86,
	min_id : 64,
	hash : -35896843842300859,
);
```