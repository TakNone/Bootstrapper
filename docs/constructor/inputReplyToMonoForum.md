# inputReplyToMonoForum

**Layer** : 211

```tl
inputReplyToMonoForum#69d66c45 monoforum_peer_id:InputPeer = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>monoforum_peer_id</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToMonoForum(
	monoforum_peer_id : $client->inputPeerEmpty(),
);
```