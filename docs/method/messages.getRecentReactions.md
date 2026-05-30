# messages.getRecentReactions

**Description** : *Get recently used message reactions*

**Layer** : 225

```tl
messages.getRecentReactions#39461db2 limit:int hash:long = messages.Reactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.Reactions](type/messages.Reactions)

---

## Example

```php
$messagesReactions = $client->messages->getRecentReactions(
	limit : 56,
	hash : 0,
);
```