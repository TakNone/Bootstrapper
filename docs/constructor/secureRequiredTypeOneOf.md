# secureRequiredTypeOneOf

**Layer** : 214

```tl
secureRequiredTypeOneOf#27477b4 types:Vector<SecureRequiredType> = SecureRequiredType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>types</mark> | [`Vector<SecureRequiredType>`](type/SecureRequiredType) | NOTHING |

---

## Type

[SecureRequiredType](type/SecureRequiredType)

---

## Example

```php
$secureRequiredType = $client->secureRequiredTypeOneOf(
	types : array(
		$client->secureRequiredType(
			native_names : true,
			selfie_required : true,
			translation_required : true,
			type : $client->secureValueTypePersonalDetails(),
		),
		$client->secureRequiredTypeOneOf(
			types : array(
				$client->secureRequiredType(
					native_names : true,
					selfie_required : true,
					translation_required : true,
					type : $client->secureValueTypePersonalDetails(...),
				),
				$client->secureRequiredTypeOneOf(
					types : array(
						$client->secureRequiredType(...),
						$client->secureRequiredTypeOneOf(...),
					),
				),
			),
		),
	),
);
```