# chatlists.getExportedInvites

**Description** : *List all chat folder deep links » associated to a folder*

**Layer** : 211

```tl
chatlists.getExportedInvites#ce03da83 chatlist:InputChatlist = chatlists.ExportedInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The folder |

---

## Result

[chatlists.ExportedInvites](type/chatlists.ExportedInvites)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |

---

## Example

```php
$chatlistsExportedInvites = $client->chatlists->getExportedInvites(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 42,
	),
);
```