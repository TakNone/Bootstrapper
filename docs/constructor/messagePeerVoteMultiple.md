# messagePeerVoteMultiple

**Description** : *How a peer voted in a multiple\-choice poll*

**Layer** : 218

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
		user_id : -2942612339622498188,
	),
	options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	date : 35,
);
```