# langPackStringPluralized

**Description** : *A language pack string which has different forms based on the number of some object it mentions\. See https://www\.unicode\.org/cldr/charts/latest/supplemental/language\_plural\_rules\.html for more info*

**Layer** : 214

```tl
langPackStringPluralized#6c47ac9f flags:# key:string zero_value:flags.0?string one_value:flags.1?string two_value:flags.2?string few_value:flags.3?string many_value:flags.4?string other_value:string = LangPackString;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	key : 'oin2ZxbhIJTGUDKF',
	zero_value : 'L6MroGzHftnmbQli',
	one_value : '8zuXVBYaFIeHKdQZ',
	two_value : '82l7HiDTztCKQJ14',
	few_value : 'lCM1qEZhPUHfz06y',
	many_value : '7KXUvlZRL35MDQGC',
	other_value : 'ZeF9hXr4iVxGAR5Y',
);
```