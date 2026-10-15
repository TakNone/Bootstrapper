# updateMessagePollVote

**Description** : *A specific peer has voted in a poll \(this update can only be received by a bot\)*

**Layer** : 229

```tl
updateMessagePollVote#7699f014 poll_id:long peer:Peer options:Vector<bytes> positions:Vector<int> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>poll_id</mark> | [`long`](type/long) | Poll ID |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that voted in the poll |
| <mark>options</mark> | [`Vector<bytes>`](type/bytes) | Chosen option(s) |
| <mark>positions</mark> | [`Vector<int>`](type/int) | 0-based indices of the voted options within the answers vector, corresponding element-by-element to options |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePollVote(
	poll_id : -2568570353088998117,
	peer : $client->peerUser(
		user_id : -3423109318772996821,
	),
	options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	positions : array(51),
	qts : 62,
);
```