# updatePendingJoinRequests

**Description** : *Someone has requested to join a chat or channel*

**Layer** : 222

```tl
updatePendingJoinRequests#7063c3db peer:Peer requests_pending:int recent_requesters:Vector<long> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Chat or channel |
| <mark>requests_pending</mark> | [`int`](type/int) | Number of pending join requests » for the chat or channel |
| <mark>recent_requesters</mark> | [`Vector<long>`](type/long) | IDs of users that have recently requested to join |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePendingJoinRequests(
	peer : $client->peerUser(
		user_id : 9144753096018776079,
	),
	requests_pending : 45,
	recent_requesters : array(2359654341761892011),
);
```