# peerChannel

**Description** : *Channel/supergroup*

**Layer** : 218

```tl
peerChannel#a2a5371e channel_id:long = Peer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |

---

## Type

[Peer](type/Peer)

---

## Example

```php
$peer = $client->peerChannel(
	channel_id : -5748221503962236260,
);
```