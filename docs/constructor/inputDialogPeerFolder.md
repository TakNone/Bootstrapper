# inputDialogPeerFolder

**Description** : *All peers in a peer folder*

**Layer** : 216

```tl
inputDialogPeerFolder#64600527 folder_id:int = InputDialogPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Type

[InputDialogPeer](type/InputDialogPeer)

---

## Example

```php
$inputDialogPeer = $client->inputDialogPeerFolder(
	folder_id : 44,
);
```