# messages.getSearchResultsPositions

**Description** : *Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation*

**Layer** : 216

```tl
messages.getSearchResultsPositions#9c7f2f10 flags:# peer:InputPeer saved_peer_id:flags.2?InputPeer filter:MessagesFilter offset_id:int limit:int = messages.SearchResultsPositions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to search |
| **saved_peer_id** | [`flags.2?InputPeer`](type/InputPeer) | Search within the saved message dialog » with this ID |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Message filter, inputMessagesFilterEmpty, inputMessagesFilterMyMentions filters are not supported by this method |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[messages.SearchResultsPositions](type/messages.SearchResultsPositions)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesSearchResultsPositions = $client->messages->getSearchResultsPositions(
	peer : $client->inputPeerEmpty(),
	saved_peer_id : $client->inputPeerEmpty(),
	filter : $client->inputMessagesFilterEmpty(),
	offset_id : 0,
	limit : 39,
);
```