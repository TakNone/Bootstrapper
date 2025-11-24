# peerUser

**Description** : *Chat partner*

**Layer** : 218

```tl
peerUser#59511722 user_id:long = Peer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |

---

## Type

[Peer](type/Peer)

---

## Example

```php
$peer = $client->peerUser(
	user_id : -115975227329057609,
);
```