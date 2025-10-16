# inputPeerChat

**Description** : *Defines a chat for further interaction*

**Layer** : 216

```tl
inputPeerChat#35a95cb9 chat_id:long = InputPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat identifier |

---

## Type

[InputPeer](type/InputPeer)

---

## Example

```php
$inputPeer = $client->inputPeerChat(
	chat_id : 2066933706400583888,
);
```