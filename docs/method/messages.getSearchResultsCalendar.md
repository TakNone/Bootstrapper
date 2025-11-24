# messages.getSearchResultsCalendar

**Description** : *Returns information about the next messages of the specified type in the chat split by days*

**Layer** : 218

```tl
messages.getSearchResultsCalendar#6aa3f6bd flags:# peer:InputPeer saved_peer_id:flags.2?InputPeer filter:MessagesFilter offset_id:int offset_date:int = messages.SearchResultsCalendar;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to search |
| **saved_peer_id** | [`flags.2?InputPeer`](type/InputPeer) | Search within the saved message dialog » with this ID |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Message filter, inputMessagesFilterEmpty, inputMessagesFilterMyMentions filters are not supported by this method |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>offset_date</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |

---

## Result

[messages.SearchResultsCalendar](type/messages.SearchResultsCalendar)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesSearchResultsCalendar = $client->messages->getSearchResultsCalendar(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	saved_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	filter : $client->inputMessagesFilterEmpty(),
	offset_id : 0,
	offset_date : 0,
);
```