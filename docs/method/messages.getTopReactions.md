# messages.getTopReactions

**Description** : *Got popular message reactions*

**Layer** : 229

```tl
messages.getTopReactions#bb8125ba limit:int hash:long = messages.Reactions;
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
$messagesReactions = $client->messages->getTopReactions(
	limit : 71,
	hash : 0,
);
```