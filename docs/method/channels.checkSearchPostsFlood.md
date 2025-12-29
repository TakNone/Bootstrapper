# channels.checkSearchPostsFlood

**Description** : *Check if the specified global post search &raquo; requires payment*

**Layer** : 218

```tl
channels.checkSearchPostsFlood#22567115 flags:# query:flags.0?string = SearchPostsFlood;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **query** | [`flags.0?string`](type/string) | The query |

---

## Result

[SearchPostsFlood](type/SearchPostsFlood)

---

## Example

```php
$searchPostsFlood = $client->channels->checkSearchPostsFlood(
	query : 'xeJSfu8OGUY5AR0c',
);
```