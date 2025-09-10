# updateFolderPeers

**Layer** : 214

```tl
updateFolderPeers#19360dc0 folder_peers:Vector<FolderPeer> pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_peers</mark> | [`Vector<FolderPeer>`](type/FolderPeer) | NOTHING |
| <mark>pts</mark> | [`int`](type/int) | NOTHING |
| <mark>pts_count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateFolderPeers(
	folder_peers : array(
		$client->folderPeer(
			peer : $client->peerUser(
				user_id : -1048653612154360727,
			),
			folder_id : 40,
		),
	),
	pts : 0,
	pts_count : 11,
);
```