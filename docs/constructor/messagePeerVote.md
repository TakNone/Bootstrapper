# messagePeerVote

**Description** : *How a peer voted in a poll*

**Layer** : 214

```tl
messagePeerVote#b6cc2d5c peer:Peer option:bytes date:int = MessagePeerVote;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer ID |
| <mark>option</mark> | [`bytes`](type/bytes) | The option chosen by the peer |
| <mark>date</mark> | [`int`](type/int) | When did the peer cast the vote |

---

## Type

[MessagePeerVote](type/MessagePeerVote)

---

## Example

```php
$messagePeerVote = $client->messagePeerVote(
	peer : $client->peerUser(
		user_id : 59936548520142181,
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	date : 58,
);
```