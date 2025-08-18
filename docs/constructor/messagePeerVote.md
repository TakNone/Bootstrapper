# messagePeerVote

**Description** : *How a peer voted in a poll*

**Layer** : 211

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
		user_id : 5819446128686617007,
	),
	option : '9	
?LiveProtoE?]?',
	date : 38,
);
```