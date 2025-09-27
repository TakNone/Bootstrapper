# secureFile

**Description** : *Secure passport file, for more info see the passport docs &raquo;*

**Layer** : 214

```tl
secureFile#7d09c27e id:long access_hash:long size:long dc_id:int date:int file_hash:bytes secret:bytes = SecureFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>size</mark> | [`long`](type/long) | File size |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID |
| <mark>date</mark> | [`int`](type/int) | Date of upload |
| <mark>file_hash</mark> | [`bytes`](type/bytes) | File hash |
| <mark>secret</mark> | [`bytes`](type/bytes) | Secret |

---

## Type

[SecureFile](type/SecureFile)

---

## Example

```php
$secureFile = $client->secureFile(
	id : 2572877492140338252,
	access_hash : -810289788142904912,
	size : 3084553009851885991,
	dc_id : 43,
	date : 4,
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```