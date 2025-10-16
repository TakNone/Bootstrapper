# messages.getPinnedDialogs

**Description** : *Get pinned dialogs*

**Layer** : 216

```tl
messages.getPinnedDialogs#d6b94df2 folder_id:int = messages.PeerDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>folder_id</mark> | [`int`](type/int) | Peer folder ID, for more info click here |

---

## Result

[messages.PeerDialogs](type/messages.PeerDialogs)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FOLDER_ID_INVALID** | `400` | Invalid folder ID |

---

## Example

```php
$messagesPeerDialogs = $client->messages->getPinnedDialogs(
	folder_id : 4,
);
```