# folders.editPeerFolders

**Description** : *Edit peers in peer folder*

**Layer** : 211

```tl
folders.editPeerFolders#6847d0ab folder_peers:Vector<InputFolderPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_peers</mark> | [`Vector<InputFolderPeer>`](type/InputFolderPeer) | New peer list |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **FOLDER_ID_INVALID** | `400` | Invalid folder ID |

---

## Example

```php
$updates = $client->folders->editPeerFolders(
	folder_peers : array(
		$client->inputFolderPeer(
			peer : $client->inputPeerEmpty(),
			folder_id : 87,
		),
	),
);
```