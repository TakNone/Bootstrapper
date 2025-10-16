# langpack.getLanguage

**Description** : *Get information about a language in a localization pack*

**Layer** : 216

```tl
langpack.getLanguage#6a596502 lang_pack:string lang_code:string = LangPackLanguage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |
| <mark>lang_code</mark> | [`string`](type/string) | Either an ISO 639-1 language code or a language pack name obtained from a language pack link |

---

## Result

[LangPackLanguage](type/LangPackLanguage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LANG_CODE_NOT_SUPPORTED** | `400` | The specified language code is not supported |
| **LANG_PACK_INVALID** | `400` | The provided language pack is invalid |

---

## Example

```php
$langPackLanguage = $client->langpack->getLanguage(
	lang_pack : 'Y0keQxwgrc9JT7WN',
	lang_code : 'w5MtGUVpkaFONRIf',
);
```