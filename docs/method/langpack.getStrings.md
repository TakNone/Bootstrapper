# langpack.getStrings

**Description** : *Get strings from a language pack*

**Layer** : 216

```tl
langpack.getStrings#efea3803 lang_pack:string lang_code:string keys:Vector<string> = Vector<LangPackString>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_pack</mark> | [`string`](type/string) | Platform identifier (i.e. android, tdesktop, etc) |
| <mark>lang_code</mark> | [`string`](type/string) | Either an ISO 639-1 language code or a language pack name obtained from a language pack link |
| <mark>keys</mark> | [`Vector<string>`](type/string) | Strings to get |

---

## Result

[Vector<LangPackString>](type/LangPackString)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **LANG_CODE_NOT_SUPPORTED** | `400` | The specified language code is not supported |
| **LANG_PACK_INVALID** | `400` | The provided language pack is invalid |

---

## Example

```php
$langPackString = $client->langpack->getStrings(
	lang_pack : 'MCkYL2ISDzX9V0Z4',
	lang_code : 'eILRJZu4YDCj1vgP',
	keys : array('xi47QfrpbuHtmsqo'),
);
```