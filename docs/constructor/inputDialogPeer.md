# inputDialogPeer

**Description** : *A peer*

**Layer** : 211

```tl
inputDialogPeer#fcaafeb7 peer:InputPeer = InputDialogPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |

---

## Type

[InputDialogPeer](type/InputDialogPeer)

---

## Example

```php
$inputDialogPeer = $client->inputDialogPeer(
	peer : $client->inputPeerEmpty(),
);
```