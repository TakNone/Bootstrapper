# messages.getAvailableReactions

**Description** : *Obtain available message reactions &raquo;*

**Layer** : 211

```tl
messages.getAvailableReactions#18dea0ac hash:int = messages.AvailableReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[messages.AvailableReactions](type/messages.AvailableReactions)

---

## Example

```php
$messagesAvailableReactions = $client->messages->getAvailableReactions(
	hash : 36,
);
```