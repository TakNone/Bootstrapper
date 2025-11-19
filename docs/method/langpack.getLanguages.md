# langpack.getLanguages

**Description** : *Get information about all languages in a localization pack*

**Layer** : 218

```tl
langpack.getLanguages#42c6978f lang_pack:string = Vector<LangPackLanguage>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |

---

## Result

[Vector<LangPackLanguage>](type/LangPackLanguage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LANG_PACK_INVALID** | `400` | The provided language pack is invalid |

---

## Example

```php
$langPackLanguage = $client->langpack->getLanguages(
	lang_pack : '1QY7vb2ND5PwxrWh',
);
```