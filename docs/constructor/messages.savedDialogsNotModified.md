# messages.savedDialogsNotModified

**Description** : *The saved dialogs haven&#039;t changed*

**Layer** : 211

```tl
messages.savedDialogsNotModified#c01f6fe8 count:int = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of saved dialogs found server-side by the query |

---

## Type

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->savedDialogsNotModified(
	count : 23,
);
```