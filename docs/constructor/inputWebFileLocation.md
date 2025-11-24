# inputWebFileLocation

**Description** : *Location of a remote HTTP\(s\) file*

**Layer** : 218

```tl
inputWebFileLocation#c239d686 url:string access_hash:long = InputWebFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | HTTP URL of file |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |

---

## Type

[InputWebFileLocation](type/InputWebFileLocation)

---

## Example

```php
$inputWebFileLocation = $client->inputWebFileLocation(
	url : 'https://docs.liveproto.dev',
	access_hash : -8489052472291936270,
);
```