# peerChat

**Description** : *Group*

**Layer** : 222

```tl
peerChat#36c6019a chat_id:long = Peer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group identifier |

---

## Type

[Peer](type/Peer)

---

## Example

```php
$peer = $client->peerChat(
	chat_id : 2782341488054715529,
);
```