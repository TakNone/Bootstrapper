# phone.groupCallStreamRtmpUrl

**Description** : *RTMP URL and stream key to be used in streaming software*

**Layer** : 214

```tl
phone.groupCallStreamRtmpUrl#2dbf3432 url:string key:string = phone.GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | RTMP URL |
| <mark>key</mark> | [`string`](type/string) | Stream key |

---

## Type

[phone.GroupCallStreamRtmpUrl](type/phone.GroupCallStreamRtmpUrl)

---

## Example

```php
$phoneGroupCallStreamRtmpUrl = $client->phone->groupCallStreamRtmpUrl(
	url : 'https://docs.liveproto.dev',
	key : 'ntKAIOQxMysgh36B',
);
```