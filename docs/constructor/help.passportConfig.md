# help.passportConfig

**Description** : *Telegram passport configuration*

**Layer** : 214

```tl
help.passportConfig#a098d6af hash:int countries_langs:DataJSON = help.PassportConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>countries_langs</mark> | [`DataJSON`](type/DataJSON) | Localization |

---

## Type

[help.PassportConfig](type/help.PassportConfig)

---

## Example

```php
$helpPassportConfig = $client->help->passportConfig(
	hash : 3,
	countries_langs : $client->dataJSON(
		data : 'N4YbEaiICdR5gFKG',
	),
);
```