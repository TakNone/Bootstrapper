# inputFolderPeer

**Description** : *Peer in a folder*

**Layer** : 214

```tl
inputFolderPeer#fbd2c296 peer:InputPeer folder_id:int = InputFolderPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Type

[InputFolderPeer](type/InputFolderPeer)

---

## Example

```php
$inputFolderPeer = $client->inputFolderPeer(
	peer : $client->inputPeerEmpty(),
	folder_id : 17,
);
```