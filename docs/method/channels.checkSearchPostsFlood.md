# channels.checkSearchPostsFlood

**Description** : *Check if the specified global post search &raquo; requires payment*

**Layer** : 216

```tl
channels.checkSearchPostsFlood#22567115 flags:# query:flags.0?string = SearchPostsFlood;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **query** | [`flags.0?string`](type/string) | The query |

---

## Result

[SearchPostsFlood](type/SearchPostsFlood)

---

## Example

```php
$searchPostsFlood = $client->channels->checkSearchPostsFlood(
	query : 'UPehTvokVq0rs6AZ',
);
```