# inputSecureFile

**Description** : *Pre\-uploaded passport file, for more info see the passport docs &raquo;*

**Layer** : 214

```tl
inputSecureFile#5367e5be id:long access_hash:long = InputSecureFile;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Secure file ID |
| <mark>access_hash</mark> | [`long`](type/long) | Secure file access hash |

---

## Type

[InputSecureFile](type/InputSecureFile)

---

## Example

```php
$inputSecureFile = $client->inputSecureFile(
	id : -7280736861118634246,
	access_hash : 682731431941701706,
);
```