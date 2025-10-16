# langPackLanguage

**Description** : *Identifies a localization pack*

**Layer** : 216

```tl
langPackLanguage#eeca5ce3 flags:# official:flags.0?true rtl:flags.2?true beta:flags.3?true name:string native_name:string lang_code:string base_lang_code:flags.1?string plural_code:string strings_count:int translated_count:int translations_url:string = LangPackLanguage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **official** | [`flags.0?true`](type/true) | Whether the language pack is official |
| **rtl** | [`flags.2?true`](type/true) | Is this a localization pack for an RTL language |
| **beta** | [`flags.3?true`](type/true) | Is this a beta localization pack? |
| <mark>name</mark> | [`string`](type/string) | Language name |
| <mark>native_name</mark> | [`string`](type/string) | Language name in the language itself |
| <mark>lang_code</mark> | [`string`](type/string) | Language code (pack identifier) |
| **base_lang_code** | [`flags.1?string`](type/string) | Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it should be fetched from base language pack. Unsupported in custom language packs |
| <mark>plural_code</mark> | [`string`](type/string) | A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more info |
| <mark>strings_count</mark> | [`int`](type/int) | Total number of non-deleted strings from the language pack |
| <mark>translated_count</mark> | [`int`](type/int) | Total number of translated strings from the language pack |
| <mark>translations_url</mark> | [`string`](type/string) | Link to language translation interface; empty for custom local language packs |

---

## Type

[LangPackLanguage](type/LangPackLanguage)

---

## Example

```php
$langPackLanguage = $client->langPackLanguage(
	official : true,
	rtl : true,
	beta : true,
	name : 'qFo68GPfAWvRS7ax',
	native_name : '5Kjc7zWyleCLTaGh',
	lang_code : 'dOk0Y3exjivz4VIt',
	base_lang_code : 'gGyV8REubdYj0rmk',
	plural_code : 'CXsbSY5Je629qp3W',
	strings_count : 70,
	translated_count : 17,
	translations_url : 'https://docs.liveproto.dev',
);
```