# updateMessagePollVote

**Description** : *A specific peer has voted in a poll*

**Layer** : 216

```tl
updateMessagePollVote#24f40e77 poll_id:long peer:Peer options:Vector<bytes> qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>poll_id</mark> | [`long`](type/long) | Poll ID |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that voted in the poll |
| <mark>options</mark> | [`Vector<bytes>`](type/bytes) | Chosen option(s) |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePollVote(
	poll_id : -165109244230580168,
	peer : $client->peerUser(
		user_id : 2565235215917065079,
	),
	options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	qts : 52,
);
```