# dialogPeerFolder

**Description** : *Peer folder*

**Layer** : 218

```tl
dialogPeerFolder#514519e2 folder_id:int = DialogPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Type

[DialogPeer](type/DialogPeer)

---

## Example

```php
$dialogPeer = $client->dialogPeerFolder(
	folder_id : 32,
);
```