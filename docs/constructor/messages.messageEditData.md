# messages.messageEditData

**Description** : *Message edit data for media*

**Layer** : 211

```tl
messages.messageEditData#26b5dde6 flags:# caption:flags.0?true = messages.MessageEditData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **caption** | [`flags.0?true`](type/true) | Media caption, if the specified media's caption can be edited |

---

## Type

[messages.MessageEditData](type/messages.MessageEditData)

---

## Example

```php
$messagesMessageEditData = $client->messages->messageEditData(
	caption : true,
);
```