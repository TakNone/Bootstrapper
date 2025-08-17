# help.getPassportConfig

**Description** : *Get passport configuration*

**Layer** : 211

```tl
help.getPassportConfig#c661ad08 hash:int = help.PassportConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[help.PassportConfig](type/help.PassportConfig)

---

## Example

```php
$helpPassportConfig = $client->help->getPassportConfig(
	hash : 1,
);
```