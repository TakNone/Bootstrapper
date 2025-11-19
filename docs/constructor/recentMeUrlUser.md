# recentMeUrlUser

**Description** : *Recent t\.me link to a user*

**Layer** : 218

```tl
recentMeUrlUser#b92c09e2 url:string user_id:long = RecentMeUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | URL |
| <mark>user_id</mark> | [`long`](type/long) | User ID |

---

## Type

[RecentMeUrl](type/RecentMeUrl)

---

## Example

```php
$recentMeUrl = $client->recentMeUrlUser(
	url : 'https://docs.liveproto.dev',
	user_id : 6066167778556409077,
);
```