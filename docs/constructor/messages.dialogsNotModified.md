# messages.dialogsNotModified

**Description** : *Dialogs haven&#039;t changed*

**Layer** : 211

```tl
messages.dialogsNotModified#f0e3e596 count:int = messages.Dialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of dialogs found server-side by the query |

---

## Type

[messages.Dialogs](type/messages.Dialogs)

---

## Example

```php
$messagesDialogs = $client->messages->dialogsNotModified(
	count : 46,
);
```