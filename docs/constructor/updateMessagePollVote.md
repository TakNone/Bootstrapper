# updateMessagePollVote

**Description** : *A specific peer has voted in a poll*

**Layer** : 211

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
	poll_id : 8495976406255788560,
	peer : $client->peerUser(
		user_id : 6758241294845380089,
	),
	options : array('?b??LiveProtos$@?X'),
	qts : 46,
);
```