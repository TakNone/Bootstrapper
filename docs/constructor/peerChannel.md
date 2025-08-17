# peerChannel

**Description** : *Channel/supergroup*

**Layer** : 211

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
	channel_id : 2091709174473110808,
);
```