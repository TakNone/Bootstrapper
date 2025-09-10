# messages.getDefaultTagReactions

**Description** : *Fetch a default recommended list of saved message tag reactions*

**Layer** : 214

```tl
messages.getDefaultTagReactions#bdf93428 hash:long = messages.Reactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.Reactions](type/messages.Reactions)

---

## Example

```php
$messagesReactions = $client->messages->getDefaultTagReactions(
	hash : 0,
);
```