# updateReadChannelInbox

**Description** : *Incoming messages in a channel/supergroup were read*

**Layer** : 216

```tl
updateReadChannelInbox#922e6e10 flags:# folder_id:flags.0?int channel_id:long max_id:int still_unread_count:int pts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **folder_id** | [`flags.0?int`](type/int) | Peer folder ID, for more info click here |
| <mark>channel_id</mark> | [`long`](type/long) | Channel/supergroup ID |
| <mark>max_id</mark> | [`int`](type/int) | Position up to which all incoming messages are read |
| <mark>still_unread_count</mark> | [`int`](type/int) | Count of messages weren't read yet |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadChannelInbox(
	folder_id : 30,
	channel_id : -6670484077022731415,
	max_id : 70,
	still_unread_count : 70,
	pts : 83,
);
```