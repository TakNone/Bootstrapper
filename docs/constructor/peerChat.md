# peerChat

**Description** : *Group*

**Layer** : 218

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
	chat_id : -8029556518778423461,
);
```