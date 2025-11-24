# messages.getSavedHistory

**Description** : *Fetch saved messages &raquo; forwarded from a specific peer, or fetch messages from a monoforum topic &raquo;*

**Layer** : 218

```tl
messages.getSavedHistory#998ab009 flags:# parent_peer:flags.0?InputPeer peer:InputPeer offset_id:int offset_date:int add_offset:int limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, fetches messages from the specified monoforum, otherwise fetches from saved messages |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Target peer (or topic) |
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
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset_id : 0,
	offset_date : 0,
	add_offset : 74,
	limit : 31,
	max_id : 14,
	min_id : 42,
	hash : 0,
);
```