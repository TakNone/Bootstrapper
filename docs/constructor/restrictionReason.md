# restrictionReason

**Description** : *Restriction reason*

**Layer** : 222

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
	platform : 'amwZAEgOe7qCY352',
	reason : 'pRTArfyGzQnO3sw2',
	text : 'PRqwsZOfBGxytg2J',
);
```