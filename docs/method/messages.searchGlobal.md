# messages.searchGlobal

**Description** : *Search for messages and peers globally*

**Layer** : 211

```tl
messages.searchGlobal#4bc6589a flags:# broadcasts_only:flags.1?true groups_only:flags.2?true users_only:flags.3?true folder_id:flags.0?int q:string filter:MessagesFilter min_date:int max_date:int offset_rate:int offset_peer:InputPeer offset_id:int limit:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **broadcasts_only** | [`flags.1?true`](type/true) | If set, only returns results from channels (used in the global channel search tab ») |
| **groups_only** | [`flags.2?true`](type/true) | Whether to search only in groups |
| **users_only** | [`flags.3?true`](type/true) | Whether to search only in private chats |
| **folder_id** | [`flags.0?int`](type/int) | Peer folder ID, for more info click here |
| <mark>q</mark> | [`string`](type/string) | Query |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Global search filter |
| <mark>min_date</mark> | [`int`](type/int) | If a positive value was specified, the method will return only messages with date bigger than min_date |
| <mark>max_date</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with date smaller than max_date |
| <mark>offset_rate</mark> | [`int`](type/int) | Initially 0, then set to the next_rate parameter of messages.messagesSlice |
| <mark>offset_peer</mark> | [`InputPeer`](type/InputPeer) | Offsets for pagination, for more info click here |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FOLDER_ID_INVALID** | `400` | Invalid folder ID |
| **INPUT_FILTER_INVALID** | `400` | The specified filter is invalid |
| **SEARCH_QUERY_EMPTY** | `400` | The search query is empty |

---

## Example

```php
$messagesMessages = $client->messages->searchGlobal(
	broadcasts_only : true,
	groups_only : true,
	users_only : true,
	folder_id : 11,
	q : 'PCpj9qEJdyWrvazK',
	filter : $client->inputMessagesFilterEmpty(),
	min_date : 90,
	max_date : 71,
	offset_rate : 76,
	offset_peer : $client->inputPeerEmpty(),
	offset_id : 86,
	limit : 4,
);
```