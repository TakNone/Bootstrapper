# folders.deleteFolder

**Description** : *Delete a peer folder*

**Layer** : 218

```tl
folders.deleteFolder#1c295881 folder_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FOLDER_ID_EMPTY** | `400` | An empty folder ID was specified |
| **FOLDER_ID_INVALID** | `400` | Invalid folder ID |

---

## Example

```php
$updates = $client->folders->deleteFolder(
	folder_id : 33,
);
```