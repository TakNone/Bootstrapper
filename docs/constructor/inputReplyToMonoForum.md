# inputReplyToMonoForum

**Description** : *Used to send messages to a monoforum topic*

**Layer** : 216

```tl
inputReplyToMonoForum#69d66c45 monoforum_peer_id:InputPeer = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>monoforum_peer_id</mark> | [`InputPeer`](type/InputPeer) | The topic ID |

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