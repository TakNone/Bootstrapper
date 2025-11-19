# messages.getSavedDialogs

**Description** : *Returns the current saved dialog list &raquo; or monoforum topic list &raquo;*

**Layer** : 218

```tl
messages.getSavedDialogs#1e91fc99 flags:# exclude_pinned:flags.0?true parent_peer:flags.1?InputPeer offset_date:int offset_id:int offset_peer:InputPeer limit:int hash:long = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **exclude_pinned** | [`flags.0?true`](type/true) | Exclude pinned dialogs |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | If set, fetches the topic list of the passed monoforum, otherwise fetches the saved dialog list |
| <mark>offset_date</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here (top_message ID used for pagination) |
| <mark>offset_peer</mark> | [`InputPeer`](type/InputPeer) | Offset peer for pagination |
| <mark>limit</mark> | [`int`](type/int) | Number of list elements to be returned |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->getSavedDialogs(
	exclude_pinned : true,
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset_date : 0,
	offset_id : 0,
	offset_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	limit : 2,
	hash : 0,
);
```