# auth.exportAuthorization

**Description** : *Returns data for copying authorization to another data\-center*

**Layer** : 211

```tl
auth.exportAuthorization#e5bfffcd dc_id:int = auth.ExportedAuthorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | Number of a target data-center |

---

## Result

[auth.ExportedAuthorization](type/auth.ExportedAuthorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DC_ID_INVALID** | `400` | The provided DC ID is invalid |

---

## Example

```php
$authExportedAuthorization = $client->auth->exportAuthorization(
	dc_id : 8,
);
```