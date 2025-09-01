# messages.getPollVotes

**Description** : *Get poll results for non\-anonymous polls*

**Layer** : 214

```tl
messages.getPollVotes#b86e380e flags:# peer:InputPeer id:int option:flags.0?bytes offset:flags.1?string limit:int = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat where the poll was sent |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **option** | [`flags.0?bytes`](type/bytes) | Get only results for the specified poll option |
| **offset** | [`flags.1?string`](type/string) | Offset for results, taken from the next_offset field of messages.votesList, initially an empty string. Note: if no more results are available, the method call will return an empty next_offset; thus, avoid providing the next_offset returned in messages.votesList if it is empty, to avoid an infinite loop |
| <mark>limit</mark> | [`int`](type/int) | Number of results to return |

---

## Result

[messages.VotesList](type/messages.VotesList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BROADCAST_FORBIDDEN** | `403` | Channel poll voters and reactions cannot be fetched to prevent deanonymization |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **POLL_VOTE_REQUIRED** | `403` | Cast a vote in the poll before calling this method |

---

## Example

```php
$messagesVotesList = $client->messages->getPollVotes(
	peer : $client->inputPeerEmpty(),
	id : 76,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	offset : 'WJB4hAM3g1xUIcaZ',
	limit : 50,
);
```