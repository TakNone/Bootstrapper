# contacts.getBlocked

**Description** : *Returns the list of blocked users*

**Layer** : 218

```tl
contacts.getBlocked#9a868f80 flags:# my_stories_from:flags.0?true offset:int limit:int = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **my_stories_from** | [`flags.0?true`](type/true) | Whether to fetch the story blocklist; if not set, will fetch the main blocklist. See here » for differences between the two |
| <mark>offset</mark> | [`int`](type/int) | The number of list elements to be skipped |
| <mark>limit</mark> | [`int`](type/int) | The number of list elements to be returned |

---

## Result

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->getBlocked(
	my_stories_from : true,
	offset : 0,
	limit : 50,
);
```