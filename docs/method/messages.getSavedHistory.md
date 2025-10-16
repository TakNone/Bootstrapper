# messages.getSavedHistory

**Description** : *Returns saved messages &raquo; forwarded from a specific peer*

**Layer** : 216

```tl
messages.getSavedHistory#998ab009 flags:# parent_peer:flags.0?InputPeer peer:InputPeer offset_id:int offset_date:int add_offset:int limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |
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
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getSavedHistory(
	parent_peer : $client->inputPeerEmpty(),
	peer : $client->inputPeerEmpty(),
	offset_id : 0,
	offset_date : 0,
	add_offset : 31,
	limit : 50,
	max_id : 40,
	min_id : 46,
	hash : 0,
);
```