# messages.getSearchCounters

**Description** : *Get the number of results that would be found by a messages\.search call with the same parameters*

**Layer** : 218

```tl
messages.getSearchCounters#1bbcf300 flags:# peer:InputPeer saved_peer_id:flags.2?InputPeer top_msg_id:flags.0?int filters:Vector<MessagesFilter> = Vector<messages.SearchCounter>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to search |
| **saved_peer_id** | [`flags.2?InputPeer`](type/InputPeer) | Search within the saved message dialog » with this ID |
| **top_msg_id** | [`flags.0?int`](type/int) | If set, consider only messages within the specified forum topic |
| <mark>filters</mark> | [`Vector<MessagesFilter>`](type/MessagesFilter) | Search filters |

---

## Result

[Vector<messages.SearchCounter>](type/messages.SearchCounter)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesSearchCounter = $client->messages->getSearchCounters(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	saved_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 94,
	filters : array(
		$client->inputMessagesFilterEmpty(),
		$client->inputMessagesFilterPhotos(),
		$client->inputMessagesFilterVideo(),
		$client->inputMessagesFilterPhotoVideo(),
		$client->inputMessagesFilterDocument(),
		$client->inputMessagesFilterUrl(),
		$client->inputMessagesFilterGif(),
		$client->inputMessagesFilterVoice(),
		$client->inputMessagesFilterMusic(),
		$client->inputMessagesFilterChatPhotos(),
		$client->inputMessagesFilterPhoneCalls(
			missed : true,
		),
		$client->inputMessagesFilterRoundVoice(),
		$client->inputMessagesFilterRoundVideo(),
		$client->inputMessagesFilterMyMentions(),
		$client->inputMessagesFilterGeo(),
		$client->inputMessagesFilterContacts(),
		$client->inputMessagesFilterPinned(),
		$client->inputMessagesFilterPhotoVideoDocuments(),
	),
);
```