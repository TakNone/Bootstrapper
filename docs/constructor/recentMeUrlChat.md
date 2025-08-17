# recentMeUrlChat

**Description** : *Recent t.me link to a chat*

**Layer** : 211

```tl
recentMeUrlChat#b2da71d2 url:string chat_id:long = RecentMeUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | t.me URL |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |

---

## Type

[RecentMeUrl](type/RecentMeUrl)

---

## Example

```php
$recentMeUrl = $client->recentMeUrlChat(
	url : 'https://docs.liveproto.dev',
	chat_id : 160099403132730043,
);
```