# messages.getQuickReplies

**Description** : *Fetch basic info about all existing quick reply shortcuts*

**Layer** : 214

```tl
messages.getQuickReplies#d483f2a8 hash:long = messages.QuickReplies;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash for pagination, generated as specified here » (not the usual algorithm used for hash generation.) |

---

## Result

[messages.QuickReplies](type/messages.QuickReplies)

---

## Example

```php
$messagesQuickReplies = $client->messages->getQuickReplies(
	hash : 0,
);
```