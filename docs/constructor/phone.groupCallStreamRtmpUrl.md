# phone.groupCallStreamRtmpUrl

**Description** : *Contains the RTMP publishing URL and secret stream key, see creating and publishing an RTMP livestream &raquo;*

**Layer** : 233

```tl
phone.groupCallStreamRtmpUrl#2dbf3432 url:string key:string = phone.GroupCallStreamRtmpUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | RTMP URL |
| <mark>key</mark> | [`string`](type/string) | Secret stream key |

---

## Type

[phone.GroupCallStreamRtmpUrl](type/phone.GroupCallStreamRtmpUrl)

---

## Example

```php
$phoneGroupCallStreamRtmpUrl = $client->phone->groupCallStreamRtmpUrl(
	url : 'https://docs.liveproto.dev',
	key : 'Hlv7wmZtQ8NdMI4p',
);
```