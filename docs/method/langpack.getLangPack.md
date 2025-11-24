# langpack.getLangPack

**Description** : *Get localization pack strings*

**Layer** : 218

```tl
langpack.getLangPack#f2f2330a lang_pack:string lang_code:string = LangPackDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |
| <mark>lang_code</mark> | [`string`](type/string) | Either an ISO 639-1 language code or a language pack name obtained from a language pack link |

---

## Result

[LangPackDifference](type/LangPackDifference)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LANGUAGE_INVALID** | `400` | The specified lang_code is invalid |
| **LANG_CODE_NOT_SUPPORTED** | `400` | The specified language code is not supported |
| **LANG_PACK_INVALID** | `400` | The provided language pack is invalid |

---

## Example

```php
$langPackDifference = $client->langpack->getLangPack(
	lang_pack : 'yFDfTlKZw9iYqSs0',
	lang_code : 'cIGZNVqU24TBdrjf',
);
```