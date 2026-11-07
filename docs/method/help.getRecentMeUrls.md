# help.getRecentMeUrls

**Description** : *Get recently used t\.me links*

**Layer** : 233

```tl
help.getRecentMeUrls#3dc0f114 referer:string = help.RecentMeUrls;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>referer</mark> | [`string`](type/string) | Referrer |

---

## Result

[help.RecentMeUrls](type/help.RecentMeUrls)

---

## Example

```php
$helpRecentMeUrls = $client->help->getRecentMeUrls(
	referer : 'Zr5nXVzB7YPTvpfd',
);
```