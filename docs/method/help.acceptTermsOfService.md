# help.acceptTermsOfService

**Description** : *Accept the new terms of service*

**Layer** : 216

```tl
help.acceptTermsOfService#ee72f79a id:DataJSON = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`DataJSON`](type/DataJSON) | ID of terms of service |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |

---

## Example

```php
$bool = $client->help->acceptTermsOfService(
	id : $client->dataJSON(
		data : '6I9j8D2ubRaH1vw7',
	),
);
```