# secureFile

**Description** : *Secure passport file, for more info see the passport docs &raquo;*

**Layer** : 222

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
	id : -5389683054364547752,
	access_hash : 4271269443366736550,
	size : 9174384388960657706,
	dc_id : 28,
	date : 31,
	file_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```