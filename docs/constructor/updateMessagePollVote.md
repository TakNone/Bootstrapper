# updateMessagePollVote

**Description** : *A specific peer has voted in a poll*

**Layer** : 225

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
| <mark>positions</mark> | [`Vector<int>`](type/int) | NOTHING |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePollVote(
	poll_id : -2828237403788935082,
	peer : $client->peerUser(
		user_id : 4415019363330135446,
	),
	options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	positions : array(41),
	qts : 94,
);
```