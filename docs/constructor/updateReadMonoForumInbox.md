# updateReadMonoForumInbox

**Description** : *Incoming messages in a monoforum topic were read*

**Layer** : 218

```tl
updateReadMonoForumInbox#77b0e372 channel_id:long saved_peer_id:Peer read_max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | ID of the monoforum |
| <mark>saved_peer_id</mark> | [`Peer`](type/Peer) | Topic ID |
| <mark>read_max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadMonoForumInbox(
	channel_id : -5002356129100522834,
	saved_peer_id : $client->peerUser(
		user_id : -7059225417304075805,
	),
	read_max_id : 41,
);
```