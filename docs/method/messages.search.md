# messages.search

**Description** : *Search for messages*

**Layer** : 211

```tl
messages.search#29ee847a flags:# peer:InputPeer q:string from_id:flags.0?InputPeer saved_peer_id:flags.2?InputPeer saved_reaction:flags.3?Vector<Reaction> top_msg_id:flags.1?int filter:MessagesFilter min_date:int max_date:int offset_id:int add_offset:int limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | User or chat, histories with which are searched, or (inputPeerEmpty) constructor to search in all private chats and normal groups (not channels) ». Use messages.searchGlobal to search globally in all chats, groups, supergroups and channels |
| <mark>q</mark> | [`string`](type/string) | Text search request |
| **from_id** | [`flags.0?InputPeer`](type/InputPeer) | Only return messages sent by the specified user ID |
| **saved_peer_id** | [`flags.2?InputPeer`](type/InputPeer) | Search within the saved message dialog » with this ID |
| **saved_reaction** | [`flags.3?Vector<Reaction>`](type/Reaction) | You may search for saved messages tagged » with one or more reactions using this flag |
| **top_msg_id** | [`flags.1?int`](type/int) | Thread ID |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Filter to return only specified message types |
| <mark>min_date</mark> | [`int`](type/int) | If a positive value was transferred, only messages with a sending date bigger than the transferred one will be returned |
| <mark>max_date</mark> | [`int`](type/int) | If a positive value was transferred, only messages with a sending date smaller than the transferred one will be returned |
| <mark>offset_id</mark> | [`int`](type/int) | Only return messages starting from the specified message ID |
| <mark>add_offset</mark> | [`int`](type/int) | Additional offset |
| <mark>limit</mark> | [`int`](type/int) | Number of results to return, can be 0 to only return the message counter |
| <mark>max_id</mark> | [`int`](type/int) | Maximum message ID to return |
| <mark>min_id</mark> | [`int`](type/int) | Minimum message ID to return |
| <mark>hash</mark> | [`long`](type/long) | Hash |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **FROM_PEER_INVALID** | `400` | The specified from_id is invalid |
| **INPUT_FILTER_INVALID** | `400` | The specified filter is invalid |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PEER_ID_NOT_SUPPORTED** | `400` | The provided peer ID is not supported |
| **SEARCH_QUERY_EMPTY** | `400` | The search query is empty |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesMessages = $client->messages->search(
	peer : $client->inputPeerEmpty(),
	q : 'xcjEkKVdt1Mo8iFH',
	from_id : $client->inputPeerEmpty(),
	saved_peer_id : $client->inputPeerEmpty(),
	saved_reaction : array(
		$client->reactionEmpty(),
		$client->reactionEmoji(
			emoticon : 'xjWikGBh5KEDpMZN',
		),
		$client->reactionCustomEmoji(
			document_id : 7583328790863261055,
		),
		$client->reactionPaid(),
	),
	top_msg_id : 9,
	filter : $client->inputMessagesFilterEmpty(),
	min_date : 16,
	max_date : 58,
	offset_id : 82,
	add_offset : 33,
	limit : 24,
	max_id : 2,
	min_id : 0,
	hash : -3909178303212057048,
);
```