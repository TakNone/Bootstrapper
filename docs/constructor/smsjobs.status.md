# smsjobs.status

**Description** : *Status*

**Layer** : 211

```tl
smsjobs.status#2aee9191 flags:# allow_international:flags.0?true recent_sent:int recent_since:int recent_remains:int total_sent:int total_since:int last_gift_slug:flags.1?string terms_url:string = smsjobs.Status;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **allow_international** | [`flags.0?true`](type/true) | Allow international numbers |
| <mark>recent_sent</mark> | [`int`](type/int) | Recently sent |
| <mark>recent_since</mark> | [`int`](type/int) | Since |
| <mark>recent_remains</mark> | [`int`](type/int) | Remaining |
| <mark>total_sent</mark> | [`int`](type/int) | Total sent |
| <mark>total_since</mark> | [`int`](type/int) | Total since |
| **last_gift_slug** | [`flags.1?string`](type/string) | Last gift deep link |
| <mark>terms_url</mark> | [`string`](type/string) | Terms of service URL |

---

## Type

[smsjobs.Status](type/smsjobs.Status)

---

## Example

```php
$smsjobsStatus = $client->smsjobs->status(
	allow_international : true,
	recent_sent : 65,
	recent_since : 87,
	recent_remains : 31,
	total_sent : 95,
	total_since : 4,
	last_gift_slug : 'x25Y7kJfIvMyozjH',
	terms_url : 'https://docs.liveproto.dev',
);
```