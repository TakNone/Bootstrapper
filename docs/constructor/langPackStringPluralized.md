# langPackStringPluralized

**Description** : *A language pack string which has different forms based on the number of some object it mentions\. See https://www\.unicode\.org/cldr/charts/latest/supplemental/language\_plural\_rules\.html for more info*

**Layer** : 222

```tl
langPackStringPluralized#6c47ac9f flags:# key:string zero_value:flags.0?string one_value:flags.1?string two_value:flags.2?string few_value:flags.3?string many_value:flags.4?string other_value:string = LangPackString;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>key</mark> | [`string`](type/string) | Localization key |
| **zero_value** | [`flags.0?string`](type/string) | Value for zero objects |
| **one_value** | [`flags.1?string`](type/string) | Value for one object |
| **two_value** | [`flags.2?string`](type/string) | Value for two objects |
| **few_value** | [`flags.3?string`](type/string) | Value for a few objects |
| **many_value** | [`flags.4?string`](type/string) | Value for many objects |
| <mark>other_value</mark> | [`string`](type/string) | Default value |

---

## Type

[LangPackString](type/LangPackString)

---

## Example

```php
$langPackString = $client->langPackStringPluralized(
	key : 'i9HTVhM4umQrPqs5',
	zero_value : '1yfiMFgte8SUH56o',
	one_value : 'LrvaUHQfDjgJWem4',
	two_value : 'PnAahpKsGWSIrXNH',
	few_value : 'hRiot9TXnyaNkwxG',
	many_value : 'Cs7hUQcgmXJjSaYD',
	other_value : 'cH34JZXwybTFfp25',
);
```