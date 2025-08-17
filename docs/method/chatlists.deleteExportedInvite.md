# chatlists.deleteExportedInvite

**Description** : *Delete a previously created chat folder deep link »*

**Layer** : 211

```tl
chatlists.deleteExportedInvite#719c5c5e chatlist:InputChatlist slug:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The related folder |
| <mark>slug</mark> | [`string`](type/string) | slug obtained from the chat folder deep link » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |
| **INVITE_SLUG_EXPIRED** | `400` | The specified chat folder link has expired |
| **INVITE_SLUG_INVALID** | `400` | The specified invitation slug is invalid |

---

## Example

```php
$bool = $client->chatlists->deleteExportedInvite(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 86,
	),
	slug : 'mawBFlRX295UsrpC',
);
```