# inputSecureFile

**Description** : *Pre\-uploaded passport file, for more info see the passport docs &raquo;*

**Layer** : 211

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
	id : 4975931554620507464,
	access_hash : -8005246321854754928,
);
```