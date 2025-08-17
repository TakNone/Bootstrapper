# stories.toggleAllStoriesHidden

**Description** : *Hide the active stories of a specific peer, preventing them from being displayed on the action bar on the homescreen*

**Layer** : 211

```tl
stories.toggleAllStoriesHidden#7c2557c4 hidden:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hidden</mark> | [`Bool`](type/Bool) | Whether to hide or unhide all active stories of the peer |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->stories->toggleAllStoriesHidden(
	hidden : $client->boolFalse(),
);
```