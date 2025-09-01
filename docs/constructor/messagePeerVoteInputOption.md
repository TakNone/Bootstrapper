# messagePeerVoteInputOption

**Description** : *How a peer voted in a poll \(reduced constructor, returned if an option was provided to messages\.getPollVotes\)*

**Layer** : 214

```tl
messagePeerVoteInputOption#74cda504 peer:Peer date:int = MessagePeerVote;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that voted for the queried option |
| <mark>date</mark> | [`int`](type/int) | When did the peer cast the vote |

---

## Type

[MessagePeerVote](type/MessagePeerVote)

---

## Example

```php
$messagePeerVote = $client->messagePeerVoteInputOption(
	peer : $client->peerUser(
		user_id : -757961824822912212,
	),
	date : 75,
);
```