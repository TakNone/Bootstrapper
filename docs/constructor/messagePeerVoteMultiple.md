# messagePeerVoteMultiple

**Description** : *How a peer voted in a multiple-choice poll*

**Layer** : 211

```tl
messagePeerVoteMultiple#4628f6e6 peer:Peer options:Vector<bytes> date:int = MessagePeerVote;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer ID |
| <mark>options</mark> | [`Vector<bytes>`](type/bytes) | Options chosen by the peer |
| <mark>date</mark> | [`int`](type/int) | When did the peer cast their votes |

---

## Type

[MessagePeerVote](type/MessagePeerVote)

---

## Example

```php
$messagePeerVote = $client->messagePeerVoteMultiple(
	peer : $client->peerUser(
		user_id : -8937676922035529990,
	),
	options : array('?}p?LiveProto?^]m '),
	date : 45,
);
```