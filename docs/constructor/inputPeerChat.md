# inputPeerChat

**Description** : *Defines a chat for further interaction*

**Layer** : 218

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
	chat_id : -4520361831872965082,
);
```