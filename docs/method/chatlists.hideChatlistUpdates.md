# chatlists.hideChatlistUpdates

**Description** : *Dismiss new pending peers recently added to a chat folder deep link &raquo;*

**Layer** : 214

```tl
chatlists.hideChatlistUpdates#66e486fb chatlist:InputChatlist = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The folder |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |

---

## Example

```php
$bool = $client->chatlists->hideChatlistUpdates(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 92,
	),
);
```