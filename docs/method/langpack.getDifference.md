# langpack.getDifference

**Description** : *Get new strings in language pack*

**Layer** : 233

```tl
langpack.getDifference#cd984aa5 lang_pack:string lang_code:string from_version:int = LangPackDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |
| <mark>lang_code</mark> | [`string`](type/string) | Either an ISO 639-1 language code or a language pack name obtained from a language pack link |
| <mark>from_version</mark> | [`int`](type/int) | Previous localization pack version |

---

## Result

[LangPackDifference](type/LangPackDifference)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LANG_PACK_INVALID** | `400` | The provided language pack is invalid |

---

## Example

```php
$langPackDifference = $client->langpack->getDifference(
	lang_pack : 'VXFv7HJZ1z6SE9RM',
	lang_code : 'p8j209VPFLHCYE7S',
	from_version : 41,
);
```