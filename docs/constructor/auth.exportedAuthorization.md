# auth.exportedAuthorization

**Description** : *Data for copying of authorization between data centers*

**Layer** : 218

```tl
auth.exportedAuthorization#b434e2b8 id:long bytes:bytes = auth.ExportedAuthorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | current user identifier |
| <mark>bytes</mark> | [`bytes`](type/bytes) | authorizes key |

---

## Type

[auth.ExportedAuthorization](type/auth.ExportedAuthorization)

---

## Example

```php
$authExportedAuthorization = $client->auth->exportedAuthorization(
	id : -1428546753579972357,
	bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```