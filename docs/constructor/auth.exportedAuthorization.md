# auth.exportedAuthorization

**Description** : *Data for copying of authorization between data centers*

**Layer** : 211

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
	id : 7607012043226456401,
	bytes : 'ܕ+&LiveProto????',
);
```