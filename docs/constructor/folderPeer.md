# folderPeer

**Description** : *Peer in a folder*

**Layer** : 216

```tl
folderPeer#e9baa668 peer:Peer folder_id:int = FolderPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Folder peer info |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Type

[FolderPeer](type/FolderPeer)

---

## Example

```php
$folderPeer = $client->folderPeer(
	peer : $client->peerUser(
		user_id : -4425258061004760062,
	),
	folder_id : 43,
);
```