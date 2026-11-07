# updateReadHistoryInbox

**Description** : *Incoming messages were read*

**Layer** : 229

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
| **top_msg_id** | [`flags.1?int`](type/int) | If set, the messages were read only within the specified bot forum topic » |
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
	folder_id : 41,
	peer : $client->peerUser(
		user_id : 1047166705429678759,
	),
	top_msg_id : 33,
	max_id : 30,
	still_unread_count : 58,
	pts : 26,
	pts_count : 5,
);
```