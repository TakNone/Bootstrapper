# restrictionReason

**Description** : *Restriction reason*

**Layer** : 227

```tl
restrictionReason#d072acb4 platform:string reason:string text:string = RestrictionReason;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>platform</mark> | [`string`](type/string) | Platform identifier (ios, android, wp, all, etc.), can be concatenated with a dash as separator (android-ios, ios-wp, etc) |
| <mark>reason</mark> | [`string`](type/string) | Restriction reason (porno, terms, etc.). Ignore this restriction reason if it is contained in the ignore_restriction_reasons » client configuration parameter |
| <mark>text</mark> | [`string`](type/string) | Error message to be shown to the user |

---

## Type

[RestrictionReason](type/RestrictionReason)

---

## Example

```php
$restrictionReason = $client->restrictionReason(
	platform : 'MUdFNuybJXfPRmkL',
	reason : 'z58OgWBrV4sSDn9t',
	text : 'yQ5mqA3d1nB9jwLv',
);
```