# statsURL

**Description** : *URL with chat statistics*

**Layer** : 211

```tl
statsURL#47a971e0 url:string = StatsURL;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Chat statistics |

---

## Type

[StatsURL](type/StatsURL)

---

## Example

```php
$statsURL = $client->statsURL(
	url : 'https://docs.liveproto.dev',
);
```