# updateReadHistoryInbox

**Description** : *Incoming messages were read*

**Layer** : 218

```tl
updateReadHistoryInbox#9e84bc99 flags:# folder_id:flags.0?int peer:Peer top_msg_id:flags.1?int max_id:int still_unread_count:int pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **folder_id** | [`flags.0?int`](type/int) | Peer folder ID, for more info click here |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| **top_msg_id** | [`flags.1?int`](type/int) | NOTHING |
| <mark>max_id</mark> | [`int`](type/int) | Maximum ID of messages read |
| <mark>still_unread_count</mark> | [`int`](type/int) | Number of messages that are still unread |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadHistoryInbox(
	folder_id : 49,
	peer : $client->peerUser(
		user_id : 757672566319730294,
	),
	top_msg_id : 83,
	max_id : 51,
	still_unread_count : 71,
	pts : 2,
	pts_count : 89,
);
```