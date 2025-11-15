# help.getCountriesList

**Description** : *Get name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 216

```tl
help.getCountriesList#735787a8 lang_code:string hash:int = help.CountriesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code of the current user |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Result

[help.CountriesList](type/help.CountriesList)

---

## Example

```php
$helpCountriesList = $client->help->getCountriesList(
	lang_code : '3NTnYxIlk8ODfWoM',
	hash : 0,
);
```