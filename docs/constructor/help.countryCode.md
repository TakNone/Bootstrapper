# help.countryCode

**Description** : *Country code and phone number pattern of a specific country*

**Layer** : 211

```tl
help.countryCode#4203c5ef flags:# country_code:string prefixes:flags.0?Vector<string> patterns:flags.1?Vector<string> = help.CountryCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>country_code</mark> | [`string`](type/string) | ISO country code |
| **prefixes** | [`flags.0?Vector<string>`](type/string) | Possible phone prefixes |
| **patterns** | [`flags.1?Vector<string>`](type/string) | Phone patterns: for example, XXX XXX XXX |

---

## Type

[help.CountryCode](type/help.CountryCode)

---

## Example

```php
$helpCountryCode = $client->help->countryCode(
	country_code : 'xmPw7HcKgO80AWo5',
	prefixes : array('y7MhL80ebPgND6kj'),
	patterns : array('gWckUTNzVIHCs7Z3'),
);
```